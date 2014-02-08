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
    public $nomseccions;

    
    public function __construct($email, $password) {
        $this->username = $email;
        $this->password = $password;
    }
    public function authenticate() {        
        
        $criteria = new CDbCriteria();
        $criteria->addCondition('username = :username AND password = :password');
        $criteria->params = array(
            ':username' => $this->username,
            ':password' => md5($this->password)
        );
        $user = Usuarisvga::model()->find($criteria);
        if(!empty($user)) {
            //usuari i contrassenya correcte, comprovem que la compte estigui activa
            // if(!$user->activated) {
            //  return self::NOT_ACTIVATED;
            // }
            // if(!$user->email_activated) {
            //  return self::EMAIL_NOT_ACTIVATED;
            // }

            $criteria = new CDbCriteria();
            $criteria->with = array('nomseccions');
            $criteria->addCondition('Usuaris_id = :user');
            $criteria->params = array(
                ':user' => $user->id
            );

            $seccions = SeccionsHasUsuaris::model()->findAll($criteria);
            $this->setState('name', $user->username);
            $this->setState('nombreseccions', $seccions);
            $this->setState('login_type', 'password');
            $this->setState('id', $user->id);
            return self::OK;
        } else {
            return self::CREDENTIALS_ERROR;
        }
    }
    
}
