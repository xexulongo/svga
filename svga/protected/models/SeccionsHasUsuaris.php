<?php

/**
 * This is the model class for table "Seccions_has_Usuaris".
 *
 * The followings are the available columns in table 'Seccions_has_Usuaris':
 * @property integer $Seccions_id
 * @property integer $Usuaris_id
 */
class SeccionsHasUsuaris extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SeccionsHasUsuaris the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->db;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Seccions_has_Usuaris';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Seccions_id, Usuaris_id', 'required'),
			array('Seccions_id, Usuaris_id', 'numerical', 'integerOnly'=>true),
			array('confirmed','boolean','allowEmpty'=>false),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Seccions_id, Usuaris_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuari' => array(self::BELONGS_TO, 'Usuarisvga', 'Usuaris_id','together'=>true),
			'seccio' => array(self::BELONGS_TO, 'Seccionsvga', 'Seccions_id','together'=>true),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id'=>'ID',
			'Seccions_id' => 'Seccions',
			'Usuaris_id' => 'Usuaris',
			'Confirmed' => 'Confirmed',
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

		$criteria->compare('Seccions_id',$this->Seccions_id);
		$criteria->compare('Usuaris_id',$this->Usuaris_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getPendingSeccionsCount()
	{
		return $this->count('confirmed=0');
	}

	public function getUsername(){
		return $this->usuari->username;
	}

	public function getSeccioname(){
		return $this->seccio->name;
	}
}