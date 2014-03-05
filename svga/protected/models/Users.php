<?php

/**
 * This is the model class for table "Users".
 *
 * The followings are the available columns in table 'Users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $avatar
 * @property integer $birthday
 * @property integer $last_login
 * @property integer $created
 */
class Users extends CActiveRecord
{
	public $repeat_password;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'Users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		$rules = array();

		$rules[] = array('username, password, email, repeat_password', 'required', 'on'=>'register');
		$rules[] = array('repeat_password', 'compare', 'compareAttribute' => 'password', 'on' => 'register');
		$rules[] = array('password', 'length', 'min' => 5, 'on' => 'register');
		$rules[] = array('email', 'email', 'on' => 'register');
		$rules[] = array('email, username', 'unique', 'on' => 'register');
		$rules[] = array('username, email, password', 'length', 'max'=>45, 'on' => 'register');
		$rules[] = array('activated, email_activated, recovery_timestamp, last_login, created', 'numerical', 'integerOnly'=>true, 'on'=>'register');
		$rules[] = array('id, username, password, email, avatar, birthday, last_login, created', 'safe', 'on'=>'search');

		return $rules;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'posts' => array(self::HAS_MANY, 'Post', 'author_id'),
			'comments' => array(self::HAS_MANY, 'Comment', 'author'),
			'equipos' => array(self::HAS_MANY, 'Teams', 'Users_has_Teams(users_id,teams_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'activated' => 'Activated',
            'email_activated' => 'Email Activated',
            'email_token' => 'Email Token',
            'recovery_token' => 'Recovery Token',
            'recovery_timestamp' => 'Recovery Timestamp',
			'avatar' => 'Avatar',
			'birthday' => 'Birthday',
			'last_login' => 'Last Login',
			'created' => 'Created',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('activated',$this->activated);
        $criteria->compare('email_activated',$this->email_activated);
        $criteria->compare('email_token',$this->email_token,true);
        $criteria->compare('recovery_token',$this->recovery_token,true);
        $criteria->compare('recovery_timestamp',$this->recovery_timestamp);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('birthday',$this->birthday);
		$criteria->compare('last_login',$this->last_login);
		$criteria->compare('created',$this->created);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
            	if(empty($this->password) && empty($this->repeat_password) && !empty($this->initialPassword))
            		$this->password=$this->repeat_password=$this->initialPassword;
 
                $hash = md5($this->password);
           	 	$this->password = $hash;

            }
            return true;
        }
        else
            return false;
    }

    public function getUsername(){
    	return $this->username;
    }
	public function validatePassword($password)
    {
        return md5($password)===$this->password;
    }
 
    public function hashPassword($password)
    {
        return crypt($password, $this->generateSalt());
    }
}
