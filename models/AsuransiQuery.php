<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Asuransi]].
 *
 * @see Asuransi
 */
class AsuransiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Asuransi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Asuransi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
