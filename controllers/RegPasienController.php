<?php

namespace app\controllers;

use Yii;
use app\models\RegPasien;
use app\models\Pasien;
use app\models\RegPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use app\models\Model;
//use app\models\PasienVisitationSearch;
use app\models\InputPeriksa;
use app\models\InputPeriksaSearch;
use app\models\PasienVisitation;
use app\models\KunjunganPasienSearch;
use kartik\grid\EditableColumnAction;
use yii\helpers\Json;


/**
 * RegPasienController implements the CRUD actions for RegPasien model.
 */
class RegPasienController extends Controller
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
     * Lists all RegPasien models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);
    }
    public function actionKesan()
    {
        
        $searchModel = new RegPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('inputkesan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $searchModel = new RegPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('inputkesan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionEditkesan() {
    $searchModel = new RegPasienSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    // Check if there is an Editable ajax request
    if (Yii::$app->request->post('hasEditable'))
    {
       
        $regId=Yii::$app->request->post('editablekey');
        $RegPasien=RegPasien::findone($regId);
        $out=Json::encode(['output'=>'','message'=>'']);
        $post=[];
        $posted=current($_POST['RegPasien']);
        $post['RegPasien']=$posted;
        // read your posted model attributes
        if ($RegPasien->load($post))
        {
            // read or convert your posted information
            $RegPasien->save();
            $output='my values';
            $out=Json::encode(['output'=>$output,'message'=>'']);
           
        }
        echo $out;
        return;
    }
    
    // Else return to rendering a normal view
    return $this->render('inputkesan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);
}
   
    /**
     * Displays a single RegPasien model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionInputPeriksa($id)
    {
        return $this->render('input_pemeriksaan', [
            'model' => $this->findModel($id),
        ]);
    }

    
    /**
     * Creates a new RegPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    
    public function actionCreateContoh()
    {
       $model = new InputPeriksa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          //  return $this->redirect(['view', 'id' => $model->id_periksa]);
           $searchModel = new InputPeriksaSearch();
           $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);          
        }
       

        $searchModel = new RegPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionCreateWesOke()
    {
        $model = new RegPasien();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           $searchModel = new RegPasienSearch();
           $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
        }
        //iki tambahn
        $searchModel = new KunjunganPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=10;
        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'sort'=> ['defaultOrder' => ['VISIT_DATE'=>SORT_ASC]],
        ]);
        }

  Public function actionCreate()
    {
        $model = new RegPasien();
        $modelsDetail = [new InputPeriksa];

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->id_kunjungan = $model->id_kunjungan;
            $model->no_cm = $model->no_cm;
            $model->nama = $model->nama;
            $model->tgl_kunjungan = $model->tgl_kunjungan;
            $model->save(); 
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
                            $modelDetail->id = $model->id;
                            $modelDetail->id_kunjungan = $model->id_kunjungan;
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
           /*     
           $searchModel = new RegPasienSearch();
           $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
        } */
        //iki tambahn
        
        }
    /**
     * Updates an existing RegPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    
    public function actionEdit($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    public function actions()
    {
        return [
            'ubah-nama' => [
                'class' => EditableAction::class,
                'modelClass' => UserModel::class,
            ],
        ];
    }
    /**
     * Deletes an existing RegPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }



    public function actionPasien_radiologi()
    {
         $model = new RegPasien();
         $sql = 'select  top(200) * FROM PASIEN_VISITATION where CLINIC_ID = \'p016\' and CAST(VISIT_DATE AS DATE) = CAST(GETDATE() AS DATE)';
         $sqlProvider = new SqlDataProvider ([
        'sql' => $sql,
        'db'=>'dbrs',
        'pagination'=>false,
        'sort'=>false,
        ]);
         
          return $this->render('reg_pasien',['sqlProvider'=>$sqlProvider]);  
        //return $this->render('create',['sqlProvider'=>$sqlProvider]);     
    }
   

    public function actionCreateXX()
    {
        $model = new RegPasien();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

         $searchModel = new RegPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider'=>$dataProvider,
        ]);


        /*
        return $this->render('create', [
            'model' => $model,
        ]); */

    }


    public function actionCreateYY()
    {
        $model = new RegPasien();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

    
        return $this->render('create', [
            'model' => $model,
        ]); 

    }

    public function actionPeriksa($id)
    {
        $model = $this->findModel($id);
        $modelperiksa = new InputPeriksa();

        if ($model->load(Yii::$app->request->post()) )
        {
            /*
            $total = count(explode(',',$model->teknisi1))-1;
                     for ($i = 0; $i <= $total; $i++)
                     {
                        
                            $LogTeknisi=new LogTeknisi; 
                            $LogTeknisi->id_alat = $model->id_alat;
                            $LogTeknisi->tgl_kegiatan = $model->tgl_pm;
                            $LogTeknisi->nama_kegiatan = "Perawatan Berkala(PM)";
                            $LogTeknisi->teknisi =explode(',',$model->teknisi1)[$i];
                          //  $LogTeknisi->id_kegiatan = $model->id_pm;
                            $LogTeknisi->id_kegiatan = $model->no_pm;
                            $LogTeknisi->save(); 
                     }
 $total = 2;
            for ($i = 0; $i <= $total; $i++)
           {
            $modelperiksa=new InputPeriksa;
            $modelperiksa->id_kunjungan = $model->id_kunjungan;
            $modelperiksa->id_jenis_tindakan = $model->id_jenis_tindakan;
            $modelperiksa->save(); 
           }
            */
          //  $model = new RegPasien();
            $modelperiksa->id_kunjungan = $model->id_kunjungan;
            $modelperiksa->id_jenis_tindakan = $model->id_kunjungan;
            $modelperiksa->save(); 

            return $this->redirect(['index','model' => $model]);  

        }
        $searchModel = new InputPeriksaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('input_pemeriksaan', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
     public function actionGetPasien($rekammedisId)
    {   
      
        $Pasien=Pasien::find()->where(['NO_REGISTRATION'=>$rekammedisId])->one();
        echo Json::encode($Pasien);
        exit;
        
    }
    /**
     * Finds the RegPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RegPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RegPasien::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
