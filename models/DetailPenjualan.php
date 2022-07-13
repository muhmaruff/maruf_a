<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_penjualan".
 *
 * @property int $no_nota
 * @property int $kode_barang
 * @property int $harga_jual
 */
class DetailPenjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'kode_barang', 'harga_jual'], 'required'],
            [['no_nota', 'kode_barang', 'harga_jual'], 'integer'],
            [['no_nota'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'kode_barang' => 'Kode Barang',
            'harga_jual' => 'Harga Jual',
        ];
    }

    public function getPenjualan()
    {
        return $this->hasOne(penjualan::className(), ['no_nota' => 'no_nota']);
    }

    public function getBarang()
    {
        return $this->hasOne(barang::className(), ['kode_barang' => 'kode_barang']);
    }
}
