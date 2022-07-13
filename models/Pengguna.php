<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id
 * @property string $user_id
 * @property string $pass_id
 * @property string $nama
 * @property string $status
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'pass_id', 'nama', 'status'], 'required'],
            [['id'], 'integer'],
            [['user_id', 'pass_id'], 'string', 'max' => 30],
            [['nama', 'status'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'pass_id' => 'Pass ID',
            'nama' => 'Nama',
            'status' => 'Status',
        ];
    }
}
