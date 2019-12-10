<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasien Visitations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-visitation-index">

   
    <p>
        <h3>Data Pasien Radiologi</h3>
    </p>

<?php //  echo $this->render('_form', ['model' => $searchModel]); ?>
<?php  Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
        'attribute' => 'visit_id',
        'format' => 'raw',
        'label' => 'Kode Kunjungan',
        'value' => function ($model) {
         /*
           return Html::a($model['VISIT_ID'],false, ['onclick' => "$('#pasienvisitation-no_registration').val(' ".$model['NO_REGISTRATION']." ');
            $('#pasienvisitation-visit_id').val(' ".$model['VISIT_ID']." ')
            "]); */
            return Html::a($model['VISIT_ID'], Url::to(['/kunjungan-pasien/update', 'VISIT_ID' => $model['VISIT_ID']]));
        }, 
        ],
            'NO_REGISTRATION',
            'VISIT_DATE', 
            'GENDER',
           // 'VISIT_ID',
            'nama.NAME_OF_PASIEN',
            'proses.ket_input',
                    ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
