<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

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

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    <?= Html::a('Восстановление пароля', ['/user/default/request-password-reset']) ?>.
                    <?= Html::a('Подтвердить e-mail', ['/user/default/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>

                <?=
                yii\authclient\widgets\AuthChoice::widget([
                    'baseAuthUrl' => ['/user/default/auth'],
                    'popupMode' => false,
                ])
            ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
