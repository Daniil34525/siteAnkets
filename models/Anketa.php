<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\helpers\ActiveQuery;

class Anketa extends ActiveRecord
{
	public $id;
    public $name;
    public $surname;
    public $password;
    public $phone;
    public $email;

    public function rules()
    {
        return [
            [['name','password', 'phone', 'email'], 'required'],
            ['email', 'email'],
            ['phone','integer', 'integerOnly'=>true,'max' => 99999999999],
        ];
    }
}