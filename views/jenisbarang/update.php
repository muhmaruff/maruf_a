<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisbarang */

$this->title = 'Update Jenisbarang: ' . $model->kode_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Jenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_jenis, 'url' => ['view', 'kode_jenis' => $model->kode_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenisbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
