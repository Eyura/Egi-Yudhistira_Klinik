<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe;

    private $_identity;

    public function rules()
    {
        return array(
            array('username, password', 'required'),
            array('rememberMe', 'boolean'),
            array('password', 'authenticate'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'rememberMe' => 'Ingat Saya',
        );
    }

    public function authenticate($attribute, $params)
    {
        if(!$this->hasErrors())
        {
            $this->_identity = new UserIdentity($this->username, $this->password);
            if(!$this->_identity->authenticate())
                $this->addError('password', 'Username atau password salah.');
        }
    }

    public function login()
    {
        if($this->_identity === null)
        {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
        {
            $duration = $this->rememberMe ? 3600*24*30 : 0; // 30 hari
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        }
        else
            return false;
    }
}
