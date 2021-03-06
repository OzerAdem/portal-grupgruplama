<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Gruplar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gruplar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grupadi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
