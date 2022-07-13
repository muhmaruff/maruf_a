<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisbarang */

$this->title = 'Create Jenisbarang';
$this->params['breadcrumbs'][] = ['label' => 'Jenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
