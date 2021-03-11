<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'weight', 'quantity_msk', 'quantity_piter', 'quantity_camara', 'quantity_caratov', 'quantity_kazan', 'quantity_novosib', 'quantity_chelyabinsk', 'quantity_dl_chelyabinsk'], 'integer'],
            [['code', 'price_msk', 'price_piter', 'price_camara', 'price_caratov', 'price_kazan', 'price_novosib', 'price_chelyabinsk', 'price_dl_chelyabinsk', 'usage_product', 'name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'weight' => $this->weight,
            'quantity_msk' => $this->quantity_msk,
            'quantity_piter' => $this->quantity_piter,
            'quantity_camara' => $this->quantity_camara,
            'quantity_caratov' => $this->quantity_caratov,
            'quantity_kazan' => $this->quantity_kazan,
            'quantity_novosib' => $this->quantity_novosib,
            'quantity_chelyabinsk' => $this->quantity_chelyabinsk,
            'quantity_dl_chelyabinsk' => $this->quantity_dl_chelyabinsk,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'price_msk', $this->price_msk])
            ->andFilterWhere(['like', 'price_piter', $this->price_piter])
            ->andFilterWhere(['like', 'price_camara', $this->price_camara])
            ->andFilterWhere(['like', 'price_caratov', $this->price_caratov])
            ->andFilterWhere(['like', 'price_kazan', $this->price_kazan])
            ->andFilterWhere(['like', 'price_novosib', $this->price_novosib])
            ->andFilterWhere(['like', 'price_chelyabinsk', $this->price_chelyabinsk])
            ->andFilterWhere(['like', 'price_dl_chelyabinsk', $this->price_dl_chelyabinsk])
            ->andFilterWhere(['like', 'usage_product', $this->usage_product])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
