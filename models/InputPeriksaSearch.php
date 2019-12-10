<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InputPeriksa;

/**
 * InputPeriksaSearch represents the model behind the search form of `app\models\InputPeriksa`.
 */
class InputPeriksaSearch extends InputPeriksa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_periksa', 'id','id_jenis_tindakan', 'biaya', 'qty', 'subtotal'], 'integer'],
            [['id_kunjungan','id'], 'safe'],
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
        $query = InputPeriksa::find();

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
            'id_periksa' => $this->id_periksa,
            'id_jenis_tindakan' => $this->id_jenis_tindakan,
            'biaya' => $this->biaya,
            'qty' => $this->qty,
            'subtotal' => $this->subtotal,
        ]);

        $query->andFilterWhere(['like', 'id_kunjungan', $this->id_kunjungan]);

        return $dataProvider;
    }
}
