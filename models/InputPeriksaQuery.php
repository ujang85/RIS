<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[InputPeriksa]].
 *
 * @see InputPeriksa
 */
class InputPeriksaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return InputPeriksa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return InputPeriksa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
