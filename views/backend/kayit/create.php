<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Kayit */

$this->title = 'Create Kayit';
$this->params['breadcrumbs'][] = ['label' => 'Kayits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kayit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
