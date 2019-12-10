<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use app\models\RegPasien;
$model2 = new RegPasien();
/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */

$this->title = 'Input Pasien Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Reg Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-pasien-create">

   

    <?= 
        $this->render('_form', [
        'model' => $model,
        'modelsDetail' => $modelsDetail,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]) ?>

   


</div>
