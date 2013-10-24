<?php

/**
 * This is the model class for table "Teams".
 *
 * The followings are the available columns in table 'Teams':
 * @property integer $id
 * @property string $name
 * @property string $profile
 */
class Teams extends CActiveRecord
{
	public $RelatedTorneosNames;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Teams the static model class
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
		return 'Teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required',
				'message'=>'{attribute} no puede estar en blanco'),
			array('name, profile', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, profile', 'safe', 'on'=>'search'),
		);
	}
	
		public function getTorneosNames()
        {
                $names = array();
                foreach($this->torneos as $torneo) {
                        $names[] = '<a href='.Yii::app()->CreateUrl('/torneos/'.$torneo->id).'>'.$torneo->name .'</a>';
                }
                
                return implode(", ", $names);
        }
        
		public function getNameAddress()
        {
                $nameadd = '<a href='. $this->id .'>'.$this->name.'</a>';
                return $nameadd;
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'torneos'=>array(self::MANY_MANY, 'Torneos', 'Torneos_has_Teams(teams_id, torneos_id)','together'=>true),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nombre',
			'profile' => 'Información de Perfil',
			'TorneosNames' => 'Torneos',
			'NameAddress'=>'Nombre',
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
		$criteria->compare('profile',$this->profile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
