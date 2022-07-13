<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailPenjualan;

/**
 * DetailPenjualanSearch represents the model behind the search form of `app\models\DetailPenjualan`.
 */
class DetailPenjualanSearch extends DetailPenjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'kode_barang', 'harga_jual'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetailPenjualan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'no_nota' => $this->no_nota,
            'kode_barang' => $this->kode_barang,
            'harga_jual' => $this->harga_jual,
        ]);

        return $dataProvider;
    }
}
