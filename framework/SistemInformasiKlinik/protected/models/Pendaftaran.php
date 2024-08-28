<?php

class Pendaftaran extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pendaftaran';
    }

    public function rules()
    {
        return array(
            array('pasien_id, tanggal_pendaftaran', 'required'),
            array('pasien_id', 'numerical', 'integerOnly' => true),
            array('tanggal_pendaftaran', 'date', 'format' => 'yyyy-MM-dd'),
        );
    }

    public function relations()
    {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'pasien_id'),
            'tindakanObat' => array(self::HAS_MANY, 'TindakanObat', 'pendaftaran_id'),
        );
    }
}


?>