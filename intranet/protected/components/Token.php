<?php
/**
 * @author dongbeta
 * @copyright Copyright @ 2010 Xii Project
 * @link http://xii.googlecode.com
 * @license	 http://www.opensource.org/licenses/bsd-license.php
 * @version $Id: Token.php 95 2010-05-17 14:00:15Z dongbeta $
 *
 * 给特定动作设置验证令牌，比如注册激活等。
 */
class Token extends CApplicationComponent
{
    /**
     * @var string 用于加密令牌的密钥，使用时后请自己制定
     */
    public $secretKey = 'change it!';
    
    /**
     * @var string 用于储存令牌的数据表
     */
    public $table = '{{token}}';

    /**
     * 创建一个令牌
     * @param string $action 令牌类型名
     * @param mixed $params 参数
     * @param int $duration 令牌有效期
     * @param int $data 令牌附加数据
     * @return boolean
     */
    public function create($action, $params, $duration = 0, $data = null)
    {
        $identityKey = $this->createIdentityKey($action, $params);
        $this->deleteByIdentityKey($action, $identityKey);
        $tokenKey = $this->createTokenKey($identityKey);
        $expireTime = $duration > 0 ? $duration + time() : 0;
        $token = $this->save($action, $identityKey, $tokenKey, $expireTime, serialize($data));
        return is_string($token) ? $token : false;
    }

    /**
     * 验证一个令牌是否有效
     * @param string $action 令牌类型名
     * @param string $token 令牌字符串
     * @param var $data 保存令牌附加数据的变量
     * @param boolean $delete 是否验证之后删除
     * @return boolean
     */
    public function validate($action, $token, &$data = '', $delete = true)
    {
        $record = $this->find($action, $token);
        if(!$record instanceof TokenRecord || $record->token != $token || ($record->expire_time > 0 && $record->expire_time < time()))
        return false;
        $data = $record->data;
        if ($delete)
        $this->deleteByTokenKey($action, $token);
        return true;
    }

    /**
     * 产生标示符，可以不依赖其他环境产生一个可以定位该令牌的字符串。同样时间，同样类型，同样参数生成同样的标示符。
     * @param string $action 令牌类型名
     * @param mixed $params 参数
     * @return string
     */
    protected function createIdentityKey($action, $params)
    {
        return md5($action.serialize($params));
    }

    /**
     * 生成一个令牌
     * @param string $identityKey 标示符
     * @return string
     */
    protected function createTokenKey($identityKey)
    {
        return md5($identityKey.$this->secretKey.time());
    }

    /**
     * 保存令牌
     * @param string $action 令牌类型名
     * @param string $identityKey 标示符
     * @param string $tokenKey 令牌
     * @param int $expireTime 到期日期
     * @param string $data 存储到令牌里面的数据
     * @return boolean
     */
    protected function save($action, $identityKey, $tokenKey, $expireTime, $data = null)
    {
        $token = new TokenRecord();
        $token->action = $action;
        $token->identity = $identityKey;
        $token->token = $tokenKey;
        $token->expire_time = $expireTime;
        $token->data = $data;
        return $token->save() ? $tokenKey : false;
    }

    /**
     * 从数据库中取出令牌的model
     * @param string $action 令牌类型名
     * @param string $token 令牌字符串
     * @return TokenRecord
     */
    protected function find($action, $token)
    {
        return TokenRecord::model()->find('action = :action AND token = :token', array(':action'=>$action, 'token'=>$token));
    }

    /**
     * delele by token key
     * @param string $action
     * @param string $identityKey
     * @return boolean
     */
    protected function deleteByIdentityKey($action, $identityKey)
    {
        return TokenRecord::model()->deleteAll('action = :action AND identity = :identity', array(':action'=>$action, ':identity'=>$identityKey));
    }

    /**
     * delele by token key
     * @param string $action
     * @param string $tokenKey
     * @return boolean
     */
    protected function deleteByTokenKey($action, $tokenKey)
    {
        return TokenRecord::model()->deleteAll('action = :action AND token = :token', array(':action'=>$action, ':token'=>$tokenKey));
    }
}
/**
 * 令牌数据库模型
 */
class TokenRecord extends CActiveRecord
{

    /**
     * @return Token
     */
    public static function model()
    {
        return parent::model(__CLASS__);
    }

    public function tableName()
    {
        return Yii::app()->token->table;
    }
    
    public function rules()
    {
        return array(
        array('action', 'match', 'pattern'=>'/^([a-zA-Z0-9]+\.)*[a-zA-Z0-9]+$/'),
        array('identity', 'match', 'pattern'=>'/^[a-z0-9]{32}$/'),
        array('token', 'match', 'pattern'=>'/^[a-z0-9]{32}$/'),
        array('expire_time', 'match', 'pattern'=>'/^[0-9]+$/')
        );
    }
    
    /**
	 * 保存之前将令牌里保存的值序列化
	 * @return boolean
	 */
    public function beforeSave()
    {
        if (parent::beforeSave())
           $this->data = serialize($this->data); 
        return true;
    }

    /**
     * 读取记录之后，恢复里面存储的值为原始格式
     */
    public function afterFind()
    {
        $this->data = unserialize($this->data); ;
    }
}