<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\SqlDataProvider;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="bed-index">

  

 <!--     -->
    <div style="overflow-x:auto"> 

       
    <?php Pjax::begin(['id'=>'dataku2']);?> 
    <?php 
    
        $pagesize = $provider->pagination->pageSize;

        $total = $provider->totalCount; 

        $totalPage = (int)(($total + $pagesize - 1) / $pagesize); 
        
        $page = Yii::$app->request->get('page');        
        
        $page=$page?$page:1;    
                
        $page++;
        
        $page = ($page > $totalPage)?1:$page;       
        
    ;?>

    <div id="urlku" urlku="<?= Url::to(array_merge(Yii::$app->request->queryParams,['databed','page'=>$page,'per-page'=>$pagesize]))?>"></div>


    <?= GridView::widget([
        'dataProvider' => $provider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ORG_UNIT_CODE',
            'nama_bangsal',
            'bangsal_kelas',
            'kapasitas',
            'isi',
            'kosong',
           


          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end();?>
    </div>
</div>
</div>

<?php $this->registerJs("
        
        setInterval(function(){
        
            $.pjax.reload({container:'#dataku2',url:$('#urlku').attr('urlku'),timeout:2e3});
        
        },10000);           
        
    ",yii\web\VIEW::POS_HEAD );
?>