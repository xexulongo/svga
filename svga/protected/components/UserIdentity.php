<?php

class UserIdentity extends CUserIdentity
{
    private $_id;
    const EMAIL_NOT_ACTIVATED = 1;
    const NOT_ACTIVATED = 2;
    const CREDENTIALS_ERROR = 3;
    const OK = 4;
    
    public $username;
    public $password;
    public $seccions;

    
    public function __construct($email, $password) {
        $this->username = $email;
        $this->password = $password;
    }
    public function authenticate() {        
        
        $criteria = new CDbCriteria();
        $criteria->with = 'seccions';
        $criteria->addCondition('username = :username AND password = :password');
        $criteria->params = array(
            ':username' => $this->username,
            ':password' => md5($this->password)
        );
        $user = Usuarisvga::model()->find($criteria);
        if(!empty($user)) {
            //usuari i contrassenya correcte, comprovem que la compte estigui activa
            if($user->activated == 0) {
             return self::NOT_ACTIVATED;
            }
            else if($user->email_activated == 0) {
             return self::EMAIL_NOT_ACTIVATED;
            }

            $criteria = new CDbCriteria();
            $criteria->addCondition('Usuaris_id = :user AND confirmed = 1');
            $criteria->params = array(
                ':user' => $user->id
            );

            $seccions = SeccionsHasUsuaris::model()->findAll($criteria);
            $user->current_login = 1;
            $user->save();
            $this->setState('username', $user->username);
            $this->setState('login_time', date("Y-m-d H:i:s"));
            $this->setState('seccions',$user->Seccions);
            $this->setState('login_type', 'membre');
            $this->setState('id', $user->id);
            return self::OK;
        } else {
            return self::CREDENTIALS_ERROR;
        }
    }

    public function updatelogin(){
        $criteria = new CDbCriteria();
        $criteria->with = 'seccions';
        $criteria->addCondition('username = :username');
        $criteria->params = array(
            ':username' => $this->username,
        );
        $user = Usuarisvga::model()->find($criteria);
        if(!empty($user)) {
            //usuari i contrassenya correcte, comprovem que la compte estigui activa
            $user->last_login = Yii::app()->user->getState('login_time');
            $user->current_login = 0;
            $user->save();
        } else {
            return self::ERROR;
        }
    }
    
}
