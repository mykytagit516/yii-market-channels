<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Attributes */

$this->title = 'Update Type: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Type', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
