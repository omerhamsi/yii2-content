<?php

namespace omerhamsi\content\models;

use Yii;

/**
 * This is the model class for table "urunler".
 *
 * @property int $id
 * @property string|null $isim
 * @property float|null $fiyat
 *
 * @property Yorumlar[] $yorumlars
 */
class Urunler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urunler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fiyat','isim'],'required'],
            [['fiyat'], 'number'],
            [['isim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'fiyat' => 'Fiyat',
        ];
    }

    /**
     * Gets query for [[Yorumlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getYorumlars()
    {
        return $this->hasMany(Yorumlar::className(), ['yorumid' => 'id']);
    }
}
