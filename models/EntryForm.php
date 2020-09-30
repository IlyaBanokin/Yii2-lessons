<?php


namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $topic;
    public $text;

    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required'],
            ['email', 'email'],
            ['topic', 'required', 'message' => 'Oops'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Ваше Имя',
            'email' => 'Почта',
            'text' => 'Текст',
            'topic' => 'Тема',
        ];
    }
}