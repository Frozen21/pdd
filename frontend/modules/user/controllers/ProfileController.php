<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\ContactForm;
use yii\filters\AccessControl;
use frontend\models\User;


/**
 * Profile controller
 */
class ProfileController extends Controller
{
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays index page.
     *
     * @return mixed
     */
    public function actionIndex() {
        $user = User::findIdentity(Yii::$app->user->getId());

        if ($user->getActual()) {
            return $this->render('index', [
                'user' => $user
            ]);
        } else {
            return $this->redirect('/user/profile/edit');
        }
    }

    /**
     * Displays profile edit page.
     *
     * @return mixed
     */
    public function actionEdit() {
        $user = User::findIdentity(Yii::$app->user->getId());

        return $this->render('edit', [
            'user' => $user
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Спасибо. Свяжемся с вами в ближайшее время.');
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка при отправке отзыва.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
