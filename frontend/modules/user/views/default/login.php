<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\User;

$this->title = 'Войти';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

               <!-- <?= $form->field($model, 'rememberMe')->checkbox() ?> -->

                <div class="form-group">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>

                <!--<?=
                yii\authclient\widgets\AuthChoice::widget([
                    'baseAuthUrl' => ['/user/default/auth'],
                    'popupMode' => false,
                ])
            ?>-->
            <?php ActiveForm::end(); ?>

            <div style="color:#999;margin:1em 0">
                <?= Html::a('Восстановление пароля', ['/user/default/request-password-reset']) ?>.
                <!--<?= Html::a('Подтвердить e-mail', ['/user/default/resend-verification-email'], ['class'=>'btn btn-primary ']) ?>-->
            </div>

            <br>
            <div>
                <p>Если у вас нет акаунта</p>
                <?= Html::a('Зарегестрироваться',
                    ['/user/default/signup'],
                    [
                        'class' => 'btn btn-primary btn-block',
                        'data' => [
                            'method' => 'post',
                            'params' => ['user_type' => User::TYPE_TEACHER]
                        ]
                    ])
                ?>.
            </div>
        </div>
    </div>
</div>
