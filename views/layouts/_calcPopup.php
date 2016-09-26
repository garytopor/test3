<?php

use app\models\forms\CalculateDelivery;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/**
 * Попап для рассчета
 * стоимости доставки
 *
 * @var app\components\View $this
 */

$model = new CalculateDelivery();
?>

<div class="btn-popup">
    <a href="#" class="close-popup">Close</a>
    <div class="popup">
        <h4><?= Yii::t('app', 'Calculate my delivery rate:'); ?></h4>
        <?php
        $form = ActiveForm::begin([
            'action' => Url::toRoute('site/calculate'),
            'id' => 'calculate-form',
            'method' => 'POST',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
            'validateOnBlur' => true,
            'fieldConfig' => [
                'template' => '{input}{error}',
            ],
            'options' => [
                'class' => 'main-form',
            ],
        ]);

        foreach($model->attributes() as $attr) {
            echo $form->field($model, $attr)->textInput([
                'placeholder' => $model->getAttributeLabel($attr)
            ]);
        }
        ?>


        <div class="row btn-holder"><input type="submit" class="btn" value="send request"></div>
        <div class="success-msg"></div>


        <?php $form->end(); ?>

    </div>
</div>
