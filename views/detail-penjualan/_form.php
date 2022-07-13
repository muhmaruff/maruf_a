<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPenjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_nota')->textInput() ?>

    <?= $form->field($model, 'kode_barang')->textInput() ?>

    <?= $form->field($model, 'harga_jual')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
