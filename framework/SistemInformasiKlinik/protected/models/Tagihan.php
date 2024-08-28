<?php

class Tagihan extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'tagihan';
    }

    public function rules()
    {
        return array(
            array('pasien_id, jumlah', 'required'),
            array('jumlah', 'numerical'),
            array('pasien_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'pasien_id' => 'Pasien ID',
            'jumlah' => 'Jumlah Tagihan',
        );
    }
}


?>