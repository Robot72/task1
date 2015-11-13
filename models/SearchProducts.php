<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * SearchProducts represents the model behind the search form about `app\models\Products`.
 */
class SearchProducts extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_brand', 'power'], 'integer'],
            [['model', 'made_year'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
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
        $query = Products::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_brand' => $this->id_brand,
            'made_year' => $this->made_year,
            'power' => $this->power,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'model', $this->model]);

        return $dataProvider;
    }
}
