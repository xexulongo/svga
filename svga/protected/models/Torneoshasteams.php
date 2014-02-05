<?php

/**
 * This is the model class for table "Torneos_has_Teams".
 *
 * The followings are the available columns in table 'Torneos_has_Teams':
 * @property integer $id
 * @property integer $Torneos_id
 * @property integer $Teams_id
 * @property integer $Paid
 */
class Torneoshasteams extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Torneoshasteams the static model class
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
		return 'Torneos_has_Teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Torneos_id, Teams_id', 'required',
			'message'=>'{attribute} no puede estar en blanco'),
			array('Torneos_id, Teams_id, Paid', 'numerical', 'integerOnly'=>true),
			 array('Paid', 'in', 'range'=>array(0,1)),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Torneos_id, Teams_id, Paid', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Torneos_id' => 'Torneo',
			'Teams_id' => 'Equipo',
			'Paid' => 'Pagado',
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
		$criteria->compare('Torneos_id',$this->Torneos_id);
		$criteria->compare('Teams_id',$this->Teams_id);
		$criteria->compare('Paid',$this->Paid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
