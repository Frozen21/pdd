<?php

namespace frontend\modules\user\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ProfileEditForm extends Model
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $phone;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'subject', 'body'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject' => 'Тема',
            'body' => 'Отзыв'
        ];
    }
}
