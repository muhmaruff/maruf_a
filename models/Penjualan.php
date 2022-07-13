<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $no_nota
 * @property string $tgl_nota
 * @property string $total_bayar
 * @property string $user_id
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'tgl_nota', 'total_bayar', 'user_id'], 'required'],
            [['no_nota'], 'integer'],
            [['tgl_nota'], 'safe'],
            [['total_bayar', 'user_id'], 'string', 'max' => 30],
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
            'tgl_nota' => 'Tgl Nota',
            'total_bayar' => 'Total Bayar',
            'user_id' => 'User ID',
        ];
    }

    public function getPengguna()
    {
        return $this->hasOne(barang::className(), ['user_id' => 'user_id']);
    }
}
