<?php

    class ContactForm extends CFormModel
    {
        public $name;
        public $email;
        public $subject;
        public $body;
        public $verifyCode;

        /**
         * @return array the validation rules.
         */
        public function rules()
        {
            return array(
                // Name, email, subject, and body are required
                array('name, email, subject, body', 'required'),
                // Email needs to be a valid email address
                array('email', 'email'),
                // VerifyCode needs to be entered correctly
                array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
            );
        }

        /**
         * @return array customized attribute labels (name=>label)
         */
        public function attributeLabels()
        {
            return array(
                'name' => 'Name',
                'email' => 'Email Address',
                'subject' => 'Subject',
                'body' => 'Body',
                'verifyCode' => 'Verification Code',
            );
        }
    }
?>
