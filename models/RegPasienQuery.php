<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RegPasien]].
 *
 * @see RegPasien
 */
class RegPasienQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RegPasien[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RegPasien|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
