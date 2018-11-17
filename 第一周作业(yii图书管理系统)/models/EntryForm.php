<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $number;

    public function rules()
    {
        return [
            [['name', 'email', 'number'], 'required'],
            ['email', 'email'],
            ['number', 'number']
        ];
    }
}
$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
$model->number = 'num';
if ($model->validate()) {
    // 验证成功！
} else {
    // 失败！
    // 使用 $model->getErrors() 获取错误详情
}
?>