<?php

class Wilayah extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'wilayah'; // Ganti dengan nama tabel Anda
    }

    public function rules()
    {
        return array(
            array('nama', 'required'),
            array('nama', 'length', 'max'=>255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'nama' => 'Nama Wilayah',
        );
    }
}


?>
