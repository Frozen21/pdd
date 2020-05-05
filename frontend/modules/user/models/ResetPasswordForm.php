<?php
namespace frontend\modules\user\models;

use yii\base\InvalidArgumentException;
use yii\base\Model;
use frontend\models\User;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;
    public $password_confirm;

    /**
     * @var \common\models\User
     */
    private $_user;


    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws InvalidArgumentException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Токен пароля не может быть пустым.');
        }
        $this->_user = User::findByPasswordResetToken($token);
        if (!$this->_user) {
            throw new InvalidArgumentException('Неверный токен пароля.');
        }
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_confirm', 'required'],
            ['password_confirm', 'string', 'min' => 6],
            ['password_confirm', 'compare', 'compareAttribute' => 'password', 'message' => "Пароль не совпадает" ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'password' => 'Пароль',
            'password_confirm' => 'Подтвердите пароль'
        ];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();

        return $user->save(false);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        $user = $this->_user;

        return $user->getUserName();
    }
}
