<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Gender]].
 *
 * @see Gender
 */
class GenderQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Gender[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Gender|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
