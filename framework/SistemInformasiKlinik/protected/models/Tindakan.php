<?php

class Tindakan extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'tindakan';
    }

    public function rules()
    {
        return array(
            array('nama, biaya', 'required'),
            array('nama', 'length', 'max' => 255),
            array('biaya', 'numerical'),
        );
    }
}


?>