<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\JenisBarang;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisbarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jenisbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_jenis',
            'nama_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jenisbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_jenis' => $model->kode_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>
