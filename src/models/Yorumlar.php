<?php

namespace omerhamsi\content\models;

use Yii;

/**
 * This is the model class for table "yorumlar".
 *
 * @property int $id
 * @property int|null $yorumid
 * @property string|null $yorumlar
 *
 * @property Urunler $yorum
 */
class Yorumlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yorumlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['yorumlar'], 'required'],
            [['yorumid'], 'integer'],
            [['yorumlar'], 'string'],
            [['yorumid'], 'exist', 'skipOnError' => true, 'targetClass' => Urunler::className(), 'targetAttribute' => ['yorumid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yorumid' => 'Yorumid',
            'yorumlar' => 'Yorumlar',
        ];
    }

    /**
     * Gets query for [[Yorum]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getYorum()
    {
        return $this->hasOne(Urunler::className(), ['id' => 'yorumid']);
    }
}
