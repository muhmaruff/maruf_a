<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_barang".
 *
 * @property string $kode_jenis
 * @property string $nama_jenis
 */
class JenisBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_jenis', 'nama_jenis'], 'required'],
            [['kode_jenis'], 'string', 'max' => 11],
            [['nama_jenis'], 'string', 'max' => 30],
            [['kode_jenis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_jenis' => 'Kode Jenis',
            'nama_jenis' => 'Nama Jenis',
        ];
    }
}
