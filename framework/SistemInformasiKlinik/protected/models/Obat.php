<?php

class Obat extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'obat';
    }

    public function rules()
    {
        return array(
            array('nama, harga', 'required'),
            array('nama', 'length', 'max' => 255),
            array('harga', 'numerical'),
        );
    }
}


?>