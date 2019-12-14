<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['/user/default/verify-email', 'token' => $user->verification_token]);
?>
Привет <?= $user->username ?>,

Подтвердите e-mail по ссылке:

<?= $verifyLink ?>

