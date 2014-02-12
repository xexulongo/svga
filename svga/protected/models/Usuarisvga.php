<?php

/**
 * This is the model class for table "Usuaris".
 *
 * The followings are the available columns in table 'Usuaris':
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $created
 * @property string $last_login
 */
class Usuarisvga extends CActiveRecord
{
	public $repeat_password;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarisvga the static model class
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
		return Yii::app()->db2;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuaris';
	}

	public function getSeccionsNames()
    {
        $names = array();
        foreach($this->seccions as $seccio) {
                $names[] = $seccio->name;
        }
        
        return implode(", ", $names);
    }

    public function getSeccions(){
    	$names = array();
        foreach($this->seccions as $seccio) {
                $names[] = $seccio->name;
        }
        return $names;
    }
        

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		$rules = array();

		$rules[] = array('name, username, password, email, repeat_password', 'required', 'on'=>'register');
		$rules[] = array('repeat_password', 'compare', 'compareAttribute' => 'password', 'on' => 'register');
		$rules[] = array('password', 'length', 'min' => 5, 'on' => 'register');
		$rules[] = array('email', 'email', 'on' => 'register');
		$rules[] = array('email, username, name', 'unique', 'on' => 'register');
		$rules[] = array('name, username, email, password', 'length', 'max'=>45, 'on' => 'register');
		$rules[] = array('activated, email_activated, recovery_timestamp, last_login, created', 'numerical', 'integerOnly'=>true, 'on'=>'register');
		$rules[] = array('id, username, name, password, email, last_login, created', 'safe', 'on'=>'search');

		return $rules;
		return array(
			//array('name, username, password, email', 'required', 'on' =>'register'),
			//array('name, username, password, email, created, last_login', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('id, name, username, password, email, created, last_login', 'safe', 'on'=>'search'),
			//array('name, email, username', 'unique'),
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
			'seccions' => array(self::MANY_MANY, 'Seccionsvga', 'Seccions_has_Usuaris(Usuaris_id, Seccions_id)','together'=>true),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Apodo',
			'username' => 'Nom d\'usuari',
			'password' => 'Password',
			'email' => 'Email',
			'created' => 'Created',
			'last_login' => 'Last Login',
			'repeat_password' => 'Repite el password',

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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('last_login',$this->last_login,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}