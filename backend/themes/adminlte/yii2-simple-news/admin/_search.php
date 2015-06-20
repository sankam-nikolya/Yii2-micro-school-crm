<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use eugenekei\news\Module;

/* @var $this yii\web\View */
/* @var $model eugenekei\news\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'image_url') ?>

    <?= $form->field($model, 'preview_url') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('module', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('module', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
