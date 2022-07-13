<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisbarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenisbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_jenis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
