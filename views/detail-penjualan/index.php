<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\DetailPenjualan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailPenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_nota',
            'kode_barang',
            'barang.nama_barang',
            'harga_jual',
            'penjualan.total_bayar',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPenjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>
