<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[IdProses]].
 *
 * @see IdProses
 */
class IdProsesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return IdProses[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return IdProses|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
