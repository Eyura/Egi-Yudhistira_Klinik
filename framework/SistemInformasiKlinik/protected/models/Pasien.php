<?php

class Pasien extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pasien'; // Sesuaikan dengan nama tabel di database Anda
    }

    public function rules()
    {
        return array(
            array('nama, alamat, tanggal_lahir, nomor_telepon', 'required'),
            array('nomor_telepon', 'numerical'),
            array('nama, alamat', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
            'nomor_telepon' => 'Nomor Telepon',
        );
    }
}



?>