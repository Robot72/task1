<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use app\models\Products;

/**
 * SearchProducts represents the model behind the search form about `app\models\Products`.
 */
class SearchProducts extends Model
{
    public $id;
    public $id_brand;
    public $model;
    public $power;
    public $price;
    public $made_year;
    public $nameBrand;

    public function rules()
    {
        return [
            [['id', 'id_brand', 'power'], 'integer'],
            [['model', 'made_year', 'nameBrand'], 'safe'],
            [['price'], 'number'],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_brand' => 'ИД Бренда',
            'model' => 'Модель',
            'made_year' => 'Дата производства',
            'power' => 'Мощность',
            'price' => 'Стоимость',
            'nameBrand' => 'Название бренда',
        ];
    }
    
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $queryProducts = Products::find();
        
        $dataProvider = new ActiveDataProvider([
            'query' => $queryProducts,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $queryProducts->andFilterWhere([
            'id' => $this->id,
            'made_year' => $this->made_year,
            'power' => $this->power,
            'price' => $this->price,
        ]);

        $queryProducts->andFilterWhere(['like', 'model', $this->model])
                ->andFilterWhere(['in', 'id_brand', 
                        (new Query())->select('id')->from('brands')->where(['like', 'name', !empty($this->nameBrand) ? $this->nameBrand : ''])
                    ]);

        return $dataProvider;
    }
}
