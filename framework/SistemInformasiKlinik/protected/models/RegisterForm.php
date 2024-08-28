<?php

    class RegisterForm extends CFormModel
    {
        public $nama;
        public $email;
        public $password;

        public function rules()
        {
            return array(
                array('nama, email, password', 'required'),
                array('email', 'email'),
                array('password', 'length', 'min' => 6),
            );
        }

        public function attributeLabels()
        {
            return array(
                'nama' => 'Nama Lengkap',
                'email' => 'Alamat Email',
                'password' => 'Kata Sandi',
            );
        }
    }


?>