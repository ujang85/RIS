<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JenisTindakan;

/**
 * JenisTindakanSearch represents the model behind the search form about `app\models\JenisTindakan`.
 */
class JenisTindakanSearch extends JenisTindakan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'CLASS_ID', 'casemix_id'], 'integer'],
            [['tarif_id', 'treat_id', 'nama_tarif', 'TARIF_TYPE', 'IMPLEMENTED', 'ISCITO', 'biaya', 'MODIFIED_DATE'], 'safe'],
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
        $query = JenisTindakan::find();

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
            'CLASS_ID' => $this->CLASS_ID,
            'MODIFIED_DATE' => $this->MODIFIED_DATE,
            'casemix_id' => $this->casemix_id,
           // 'TARIF_TYPE'=> '08',
            //'treat_id'=>'08',
        ]);

        $query->andFilterWhere(['like', 'tarif_id', $this->tarif_id])
          //  ->andFilterWhere(['like', 'treat_id', $this->treat_id])
        	->andFilterWhere(['like', 'treat_id', $this->treat_id='0800'])
            ->andFilterWhere(['like', 'nama_tarif', $this->nama_tarif])
            ->andFilterWhere(['like', 'TARIF_TYPE', $this->TARIF_TYPE])
            ->andFilterWhere(['like', 'IMPLEMENTED', $this->IMPLEMENTED])
            ->andFilterWhere(['like', 'ISCITO', $this->ISCITO])
            ->andFilterWhere(['like', 'biaya', $this->biaya]);

        return $dataProvider;
    }
}
