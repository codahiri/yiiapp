<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form of `frontend\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employeeNumber', 'reportsTo'], 'integer'],
            [['lastName', 'firstName', 'extension', 'email', 'officeCode', 'jobTitle'], 'safe'],
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
        $query = Employees::find();

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
            'employeeNumber' => $this->employeeNumber,
            'reportsTo' => $this->reportsTo,
        ]);

        $query->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'extension', $this->extension])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'officeCode', $this->officeCode])
            ->andFilterWhere(['like', 'jobTitle', $this->jobTitle]);

        return $dataProvider;
    }
}
