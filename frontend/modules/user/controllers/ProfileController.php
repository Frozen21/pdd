<?php

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\user\models\ContactForm;
use yii\filters\AccessControl;


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

    public function actionIndex() {
        return $this->render('index');
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
