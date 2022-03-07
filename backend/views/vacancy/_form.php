<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
/* @var $rateList */
?>

<div class="vacancy-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rate_id')->dropDownList(\yii\helpers\ArrayHelper::map($rateList, 'id','range'),[]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(\yii\helpers\ArrayHelper::map($departmentList, 'id','name'),[]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
