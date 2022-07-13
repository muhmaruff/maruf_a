<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPenjualan */

$this->title = $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Detail Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-penjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_nota' => $model->no_nota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_nota' => $model->no_nota], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_nota',
            'kode_barang',
            'harga_jual',
        ],
    ]) ?>

</div>
