<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['/user/default/reset-password', 'token' => $user->password_reset_token]);
?>
Привет <?= $user->username ?>,

Ссылка для сброса пароля::

<?= $resetLink ?>
