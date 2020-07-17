<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_ID')->textInput() ?>

    <?= $form->field($model, 'product_ID')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
