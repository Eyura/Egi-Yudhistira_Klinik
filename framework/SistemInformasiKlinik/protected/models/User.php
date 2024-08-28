<?php
class User extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('email', 'required'),
            array('email', 'email'), // Validasi email
            array('email', 'length', 'max' => 255),
            // Aturan lain sesuai kebutuhan
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'email' => 'Email',
            // Label atribut lain sesuai kebutuhan
        );
    }
}


?>