<?php

class LoginForm extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe;

    private $_identity;

    /**
     * Aturan validasi untuk atribut model.
     */
    public function rules()
    {
        return array(
            // Username dan password harus diisi
            array('username, password', 'required'),
            // rememberMe adalah boolean
            array('rememberMe', 'boolean'),
            // Password akan divalidasi menggunakan authenticate
            array('password', 'authenticate'),
        );
    }

    /**
     * Menentukan label untuk atribut.
     */
    public function attributeLabels()
    {
        return array(
            'username' => 'Username',
            'password' => 'Password',
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Memvalidasi password.
     * Method ini dipanggil dalam aturan validasi.
     */
    public function authenticate($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            if (!$this->_identity->authenticate()) {
                $this->addError('password', 'Incorrect username or password.');
            }
        }
    }

    /**
     * Log in pengguna menggunakan username dan password yang dimasukkan.
     * @return boolean true jika login berhasil
     */
    public function login()
    {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 hari
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else {
            return false;
        }
    }
}


?>