<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\modules\user\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Написать отзыв';

?>
<div class="site-contact">
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                Если у вас есть пожелания или вопросы, пожалуйста заполните поля для контакта с нами. Спасибо.
            </p>

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'subject')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <br>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-block', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
