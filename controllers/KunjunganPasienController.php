<?php

namespace app\controllers;

use Yii;
use app\models\PasienVisitation;
use app\models\KunjunganPasienSearch;
use app\models\RegPasien;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\InputPeriksa;

/**
 * PasienVisitationController implements the CRUD actions for PasienVisitation model.
 */
class KunjunganPasienController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PasienVisitation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KunjunganPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PasienVisitation model.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($VISIT_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($VISIT_ID),
        ]);
    }
    
    /**
     * Creates a new PasienVisitation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateXX()
    {
        $model = new PasienVisitation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION,'VISIT_ID' => $model->VISIT_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionCreate()
    {
      //  $model = new PasienVisitation();
        $modelkunjung = new RegPasien();
        $modelperiksa = new InputPeriksa();
        $model = $this->findModel($VISIT_ID);

       if ($model->load(Yii::$app->request->post()) )
        {
            $modelkunjung->id_kunjungan = $model->VISIT_ID;
            $modelkunjung->no_cm = $model->NO_REGISTRATION;
            $modelkunjung->save();
      //      $modelperiksa->id_kunjungan = $model->VISIT_ID;
      //      $modelperiksa->save();
            $model->RAD_INPUT ='1';
            $model->save();   
            return $this->redirect(['create','model' => $model]);     
        }
       

        $searchModel = new KunjunganPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        /*
        return $this->render('create', [
            'model' => $model,
          //  'model' => $modelkunjung,
        ]); */
    }


    Public function actionUpdate($VISIT_ID)
    {
        $model = $this->findModel($VISIT_ID);
        $modelRegPas = new RegPasien();
        $modelsDetail = [new InputPeriksa];
        if ($model->load(Yii::$app->request->post())) 
        {
            $modelRegPas->id_kunjungan = $model->id_kunjungan;
            $modelRegPas->no_cm = $model->no_cm;
            $modelRegPas->nama = $model->nama;
            $modelRegPas->tgl_kunjungan = $model->tgl_kunjungan;
            $modelRegPas->save(); 
            $modelsDetail = Model::createMultiple(InputPeriksa::classname());
            Model::loadMultiple($modelsDetail, Yii::$app->request->post());
            // validate all models
            $valid = $modelRegPas->validate();
            $valid = Model::validateMultiple($modelsDetail) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $modelRegPas->save(false)) {
                        foreach ($modelsDetail as $modelDetail) {
                            $modelDetail->id = $modelRegPas->id;
                            $modelDetail->id_kunjungan = $modelRegPas->id_kunjungan;
                            $modelDetail->id_jenis_tindakan =$modelDetail->id_jenis_tindakan;
                            $modelDetail->biaya = $modelDetail->biaya;
                            $modelDetail->qty =$modelDetail->qty;
                            if (! ($flag = $modelDetail->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                        $searchModel = new RegPasienSearch();
                       $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                        return $this->render('index', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                        ]);
                    }
                }
                   catch (Exception $e) {
                    $transaction->rollBack();
                    
                     }
                } 
            }
            else {
           
        $searchModel = new KunjunganPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=10;
        return $this->render('create', [
            'model' => $model,
            'modelsDetail' => (empty($modelsDetail)) ? [new InputPeriksa] : $modelsDetail,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'sort'=> ['defaultOrder' => ['VISIT_DATE'=>SORT_DESC]]
           // 'sort' => ['defaultOrder'=>'VISIT_DATE desc']
        ]);
         }    
        }

    public function actionUpdateBackup($VISIT_ID)
    {
        $model = $this->findModel($VISIT_ID);
        $modelkunjung = new RegPasien();
        $modelsDetail = [new InputPeriksa];
      

        if ($model->load(Yii::$app->request->post()) )
        {
            $modelkunjung->id_kunjungan = $model->VISIT_ID;
            $modelkunjung->no_cm = $model->NO_REGISTRATION;
            $modelkunjung->nama = $model->nama->NAME_OF_PASIEN;
            $modelkunjung->tgl_kunjungan = $model->VISIT_DATE;
            $modelkunjung->sex = $model->GENDER;
            $modelkunjung->tgl_lahir =Yii::$app->formatter->asDatetime($model->nama->DATE_OF_BIRTH, 'php:Y-m-d');
            $modelkunjung->umur_tahun = $model->AGEYEAR;
            $modelkunjung->umur_bulan = $model->AGEMONTH;
            $modelkunjung->dokter = $model->EMPLOYEE_ID;
            $modelkunjung->rujukan_asal = $model->RUJUKAN_ID;
            $modelkunjung->klinik_asal = $model->CLINIC_ID_FROM;
            $modelkunjung->asuransi = $model->STATUS_PASIEN_ID;
            $modelkunjung->lama_baru = $model->ISNEW;
            $modelkunjung->save(); 
            $modelperiksa->id_kunjungan = $model->VISIT_ID;
            $modelperiksa->save();
          //  $model->RAD_INPUT ='1';
         //   $model->save(); 
           // return $this->redirect(['index','model' => $model]);  
            $modelsDetail = Model::createMultiple(InputPeriksa::classname());
            Model::loadMultiple($modelsDetail, Yii::$app->request->post());
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsDetail) && $valid;
            
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsDetail as $modelDetail) {
                            $modelDetail->id_kunjungan = $model->id_kunjungan;
                         //   $modelDetail->id_km = $model->no_km;
                            $modelDetail->qty =$modelDetail->qty;
                            if (! ($flag = $modelDetail->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }

                }
                   catch (Exception $e) {
                    $transaction->rollBack();
                    
                     }
                } 


            }


       else {
        $searchModel = new KunjunganPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('update', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        }
    }
   
   public function actionUpdateWesDadi($VISIT_ID)
    {
        $model = $this->findModel($VISIT_ID);
        $modelkunjung = new RegPasien();
      //  $modelsDetail = [new InputPeriksa];
      //  $modelperiksa = new InputPeriksa();

        if ($model->load(Yii::$app->request->post()) )
        {
            $modelkunjung->id_kunjungan = $model->VISIT_ID;
            $modelkunjung->no_cm = $model->NO_REGISTRATION;
            $modelkunjung->nama = $model->nama->NAME_OF_PASIEN;
            $modelkunjung->tgl_kunjungan = $model->VISIT_DATE;
            $modelkunjung->sex = $model->GENDER;
            $modelkunjung->tgl_lahir =Yii::$app->formatter->asDatetime($model->nama->DATE_OF_BIRTH, 'php:Y-m-d');
            $modelkunjung->umur_tahun = $model->AGEYEAR;
            $modelkunjung->umur_bulan = $model->AGEMONTH;
            $modelkunjung->dokter = $model->EMPLOYEE_ID;
            $modelkunjung->rujukan_asal = $model->RUJUKAN_ID;
            $modelkunjung->klinik_asal = $model->CLINIC_ID_FROM;
            $modelkunjung->asuransi = $model->STATUS_PASIEN_ID;
            $modelkunjung->lama_baru = $model->ISNEW;
            $modelkunjung->save(); 
            $modelperiksa->id_kunjungan = $model->VISIT_ID;
            $modelperiksa->save();
            $model->RAD_INPUT ='1';
            $model->save(); 
            return $this->redirect(['index','model' => $model]);  

        }
        $searchModel = new KunjunganPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('update', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
   

     * Updates an existing PasienVisitation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    


    public function actionUpdateXX($VISIT_ID)
    {
        $model = $this->findModel($VISIT_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view','VISIT_ID' => $model->VISIT_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PasienVisitation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)
    {
        $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)->delete();

        return $this->redirect(['index']);
    }



    public function actionRadiologi()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
       // $provider = new ->queryScalar();SqlDataProvider([
         $connection = Yii::$app->getdbrs();
        $command = $connection->createCommand('select top(20) * FROM PASIEN_VISITATION');
       $result = $command->queryAll();
        return $result ;      
    }
    /**
     * Finds the PasienVisitation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return PasienVisitation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($VISIT_ID)
    {
        if (($model = PasienVisitation::findOne(['VISIT_ID' => $VISIT_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
