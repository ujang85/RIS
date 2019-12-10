<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegPasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reg Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-pasien-index">

   

    <?=  GridView::widget([
        'dataProvider' => $sqlProvider,
        'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
       
               [
        'label' => 'No Registration',
        'value' => function ($model) {
        return $model['NO_REGISTRATION'];
        },
        ],[
        'label' => 'visit_id',
        'value' => function ($model) {
        return $model['VISIT_ID'];
        },
        ],
        [
        'label' => 'CLINID_ID',
        'value' => function ($model) {
        return $model['CLINIC_ID'];
        },
        ],
         ],
        ]);  ?>

</div>
