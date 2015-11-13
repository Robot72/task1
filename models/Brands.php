<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brands".
 *
 * @property integer $id
 * @property integer $id_country
 * @property string $name
 *
 * @property Countries $idCountry
 * @property Products[] $products
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_country'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_country' => 'Id Country',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'id_country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id_brand' => 'id']);
    }
}
