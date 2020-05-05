<?php
use yii\helpers\Html;
use frontend\models\User;

/* @var $this yii\web\View */

$this->title = 'Личный кабинет';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php if (!$user->getActual()): ?>
            <h1>Поздравляем с регистрацией.</h1>
        <?php endif; ?>
    </div>
    <div class="profile-edit-body">
        <div class="row">

        </div>
    </div>

</div>
