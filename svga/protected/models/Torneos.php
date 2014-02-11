<?php

/**
 * This is the model class for table "Torneos".
 *
 * The followings are the available columns in table 'Torneos':
 * @property integer $id
 * @property string $name
 * @property string $type
 */
class Torneos extends CActiveRecord
{
	const TYPE_ENABLED=1;
    const TYPE_OFF=0;
    const STATUS_OFF=0;
    const STATUS_REGISTER=1;
    const STATUS_PLAYING=2;
    const STATUS_FINISHED=3;
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Torneos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Torneos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type', 'length', 'max'=>45),
			array('type', 'in', 'range'=>array(0,1)),
			array('enabled', 'in', 'range'=>array(0,1)),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, type', 'safe', 'on'=>'search'),
		);
	}

	public function getTeamsNames()
    {
        $names = array();
        foreach($this->equipos as $team) {
                $names[] = '<a href='.Yii::app()->CreateUrl('/team/view', array('id'=>$team->id)).'>'.$team->name .'</a>';
        }
        
        return implode(", ", $names);
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'equipos' => array(self::MANY_MANY, 'Teams', 'Torneos_has_Teams(torneos_id,teams_id)','together'=>true),
		);
	}
	
	public function getEnabledType(){
		$status = $this->enabled;
			if($status == 0) $status = 'Descativado';
			else if ($status==1) $status = 'Inscripciones Abiertas';
			else if($status ==2) $status = 'En juego';
			else $status = "Finalizado";
		return $status;
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nombre',
			'type' => 'Tipo de torneo',
			'NameAddresss'=>'Nombre',
			'EnabledType'=>'Status',
			'teams'=>'Equipo',
			'TeamsNames'=>'Participantes',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
