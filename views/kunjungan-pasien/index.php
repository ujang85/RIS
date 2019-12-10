<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
//se yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kunjungan Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-visitation-index">

   
<?php //  echo $this->render('_form', ['model' => $searchModel]); ?>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
         /*   [
        'attribute' => 'visit_id',
        'format' => 'raw',
        'label' => 'Kode Kunjungan',
        'value' => function ($model) {
         /*
           return Html::a($model['VISIT_ID'],false, ['onclick' => "$('#pasienvisitation-no_registration').val(' ".$model['NO_REGISTRATION']." ');
            $('#pasienvisitation-visit_id').val(' ".$model['VISIT_ID']." ')
            "]); */  /*
            return Html::a($model['VISIT_ID'], Url::to(['/kunjungan-pasien/update', 'VISIT_ID' => $model['VISIT_ID']]));
        }, 
        ], */

        [
            'label' => 'kirim',
            'format' => 'raw',
          'label' => 'Register Pasien',
        'value' => function ($model) {
        
          //  return Html::a($model['VISIT_ID'], Url::to(['/kunjungan-pasien/update', 'VISIT_ID' => $model['VISIT_ID']]));
            return Html::a('<i class="fa fa-sign-out"></i> Kirim', ['update', 'VISIT_ID'=>$model->VISIT_ID]);
        }, 

        ],


            'NO_REGISTRATION',
            'nama.NAME_OF_PASIEN',
            'proses.ket_input',

        ],
        
    ]); ?>
    <?php Pjax::end(); ?>
</div>
