<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $booksname
 * @property string $booksauthor
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booksname', 'booksauthor'], 'required'],
            [['booksname', 'booksauthor'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booksname' => 'Booksname',
            'booksauthor' => 'Booksauthor',
        ];
    }
    
}
