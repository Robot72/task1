<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $id_brand
 * @property string $model
 * @property string $made_year
 * @property integer $power
 * @property double $price
 *
 * @property Brands $idBrand
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_brand', 'power'], 'integer'],
            [['made_year'], 'safe'],
            [['price'], 'number'],
            [['model'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_brand' => 'Бренд',
            'model' => 'Модель',
            'made_year' => 'Год производства',
            'power' => 'Мощность',
            'price' => 'Стоимость',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBrand()
    {
        return $this->hasOne(Brands::className(), ['id' => 'id_brand']);
    }
    
    public function getNameBrand()
    {
        return $this->hasOne(Brands::className(), ['id' => 'id_brand'])->one()->name;
    }
}
