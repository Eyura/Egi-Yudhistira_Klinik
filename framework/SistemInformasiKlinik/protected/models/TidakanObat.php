<?php

class TindakanObat extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'tindakan_obat';
    }

    public function rules()
    {
        return array(
            array('pendaftaran_id', 'required'),
            array('tindakan_id, obat_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations()
    {
        return array(
            'pendaftaran' => array(self::BELONGS_TO, 'Pendaftaran', 'pendaftaran_id'),
            'tindakan' => array(self::BELONGS_TO, 'Tindakan', 'tindakan_id'),
            'obat' => array(self::BELONGS_TO, 'Obat', 'obat_id'),
        );
    }
}


?>
