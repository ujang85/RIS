<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JenisTindakan */
?>
<div class="jenis-tindakan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tarif_id',
            'treat_id',
            'nama_tarif',
            'CLASS_ID',
            'TARIF_TYPE',
            'IMPLEMENTED',
            'ISCITO',
            'biaya',
            'MODIFIED_DATE',
            'casemix_id',
        ],
    ]) ?>

</div>
