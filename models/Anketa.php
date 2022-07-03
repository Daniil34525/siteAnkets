<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anketa".
 *
 * @property int $id
 * @property string $name
 * @property string|null $surname
 * @property string $password
 * @property string $phone
 * @property string $email
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Anketa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anketa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password', 'phone', 'email'], 'required'],
            [['created_at', 'updated_at','password'], 'safe'],
            [['name', 'surname'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 11],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'password' => 'Пароль',
            'phone' => 'Телефон',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    /*public function setPassword($password)
    {
        $this->password = Yii::$app->getSecurity()->encryptByPassword($password, 'r');
    }
    public function getPassword()
    {
        return Yii::$app->getSecurity()->decryptByPassword($this->password, 'r');
    }*/
}
