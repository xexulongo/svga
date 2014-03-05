<?php

/**
 * This is the model class for table "Users_has_Teams".
 *
 * The followings are the available columns in table 'Users_has_Teams':
 * @property integer $Users_id
 * @property integer $Teams_id
 */
class Users_has_Teams extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users_has_Teams the static model class
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
		return 'Users_has_Teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Users_id, Teams_id', 'required'),
			array('Users_id, Teams_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Users_id, Teams_id', 'safe', 'on'=>'search'),
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
		  'teams' => array(self::BELONGS_TO, 'Teams', 'Teams_id'),
		  'users' => array(self::BELONGS_TO, 'Users', 'Users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Users_id' => 'Users',
			'Teams_id' => 'Teams',
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

		$criteria->compare('Users_id',$this->Users_id);
		$criteria->compare('Teams_id',$this->Teams_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}