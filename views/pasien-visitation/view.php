<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */
?>
<div class="pasien-visitation-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ORG_UNIT_CODE',
            'NO_REGISTRATION',
            'VISIT_ID',
            'STATUS_PASIEN_ID',
            'RUJUKAN_ID',
            'ADDRESS_OF_RUJUKAN',
                    
        
        ],
    ]) ?>

</div>
