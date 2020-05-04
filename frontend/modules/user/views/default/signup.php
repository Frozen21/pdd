<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\User;

$this->title = 'Регистрация' . (empty($user_type) ? '' : ($user_type == User::TYPE_TEACHER ? ' Автошколы' : ' в качестве Ученика'));
?>
<div class="site-signup">
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <br>
                <div class="form-group">
                    <?= Html::submitButton('Зарегистрироваться', [
                        'class' => 'btn btn-primary btn-block',
                        'name' => 'signup-button',
                        'data' => [
                            'method' => 'post',
                            'params' => ['user_type' => $user_type]
                        ]
                    ]) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
