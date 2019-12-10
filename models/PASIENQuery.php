<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PASIEN]].
 *
 * @see PASIEN
 */
class PASIENQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PASIEN[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PASIEN|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
