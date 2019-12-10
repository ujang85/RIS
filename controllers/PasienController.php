<?php

namespace app\controllers;

use Yii;
use app\models\Pasien;
use app\models\PasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
use yii\helpers\Json;
use yii\data\ActiveDataProvider;

/**
 * PasienController implements the CRUD actions for Pasien model.
 */
class PasienController extends Controller
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
     * Lists all Pasien models.
     * @return mixed
     */
    public function actionIndexX()
    {
        $searchModel = new PasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionIndex()
    {
                
        
        $count = Yii::$app->dbrs->createCommand('select p.NO_REGISTRATION, p.NAME_OF_PASIEN, s.NAME_OF_GENDER, p.CONTACT_ADDRESS, a.NAMA_AGAMA, c.NAME_OF_CLINIC, t.TREAT_DATE AS tgl_masuk
                    FROM pasien AS p INNER JOIN
                      TREATMENT_AKOMODASI AS t ON p.NO_REGISTRATION = t.NO_REGISTRATION INNER JOIN
                      AGAMA AS a ON p.KODE_AGAMA = a.KODE_AGAMA INNER JOIN
                      CLINIC AS c ON t.CLINIC_ID = c.CLINIC_ID INNER JOIN
                      SEX AS s ON p.GENDER = s.GENDER
            WHERE     t.KELUAR_ID = 0')->queryScalar();

       // $provider = new ->queryScalar();SqlDataProvider([
            $sql = 'SELECT p.NO_REGISTRATION, p.NAME_OF_PASIEN, s.NAME_OF_GENDER, p.CONTACT_ADDRESS, a.NAMA_AGAMA, c.NAME_OF_CLINIC, t.TREAT_DATE AS tgl_masuk
                    FROM PASIEN AS p INNER JOIN
                     TREATMENT_AKOMODASI AS t ON p.NO_REGISTRATION = t.NO_REGISTRATION INNER JOIN
                     AGAMA AS a ON p.KODE_AGAMA = a.KODE_AGAMA INNER JOIN
                      CLINIC AS c ON t.CLINIC_ID = c.CLINIC_ID INNER JOIN
                      SEX AS s ON p.GENDER = s.GENDER
            WHERE     (t.KELUAR_ID = 0)';
        
         $SqlProvider = new SqlDataProvider ([
            'sql' => $sql,
         ]);
          return $this->render('index', ['SqlProvider'=> $SqlProvider]);
          
       
    } 

    public function actionPasien3()

    {
               
        
      \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
       // $provider = new ->queryScalar();SqlDataProvider([
         $connection = Yii::$app->getDbrs();
        $command = $connection->createCommand(
            "SELECT p.NO_REGISTRATION, p.NAME_OF_PASIEN, s.NAME_OF_GENDER, p.CONTACT_ADDRESS, a.NAMA_AGAMA, c.NAME_OF_CLINIC, t.TREAT_DATE AS tgl_masuk
                    FROM dbo.PASIEN AS p INNER JOIN
                      dbo.TREATMENT_AKOMODASI AS t ON p.NO_REGISTRATION = t.NO_REGISTRATION INNER JOIN
                      dbo.AGAMA AS a ON p.KODE_AGAMA = a.KODE_AGAMA INNER JOIN
                      dbo.CLINIC AS c ON t.CLINIC_ID = c.CLINIC_ID INNER JOIN
                      dbo.SEX AS s ON p.GENDER = s.GENDER
            WHERE     (t.KELUAR_ID = 0)");
        
           $result = $command->queryAll();
        return $result ; 
         
    } 
    


    public function actionInfobed()

    {
      
      \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
       
         
        $command = Yii::$app->dbrs->createCommand('SELECT name_of_clinic as nama_bangsal,NAME_OF_CLASS as kelas,cap as kapasitas,isi,(cap-isi) as kosong FROM view_infobed');
           
          
        
           $result = $command->queryAll();
        return $result ; 
         
    }
  


    public function actionInfott()

    {
      // $count = Yii::$app->dbrs->createCommand('SELECT name_of_clinic as nama_bangsal,NAME_OF_CLASS as kelas,cap as kapasitas,isi,(cap-isi) as kosong FROM view_infobed')->queryScalar();

       // $provider = new ->queryScalar();SqlDataProvider([
            $sql = 'SELECT name_of_clinic as nama_bangsal,NAME_OF_CLASS as kelas,cap as kapasitas,isi,(cap-isi) as kosong FROM view_infobed';
        
         $provider = new SqlDataProvider ([
            'sql' => $sql,
         ]);

   
          return $this->render('infott',['provider'=>$provider]);
         
    }

    public function actionPasien_radiologi()
    {
              
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
      /*  $count = Yii::$app->dbrs->createCommand('select * FROM PASIEN_VISITATION
                    where CAST(VISIT_DATE AS DATE) = CAST(GETDATE() AS DATE')->queryScalar(); */
           
         $command = Yii::$app->dbrs->createCommand('select top(20) * FROM PASIEN_VISITATION where CAST(VISIT_DATE AS DATE) = CAST(GETDATE() AS DATE');
           
          
        
           $result = $command->queryAll();
        return $result ; 
         /*
        $provider = new SqlDataProvider([
            $sql = 'select * FROM PASIEN_VISITATION
                    where CAST(VISIT_DATE AS DATE) = CAST(GETDATE() AS DATE',
         
         ]);

        $models = $provider->getModels();
        //  return $this->render('form',['provider'=>$provider]);  */
         
    }










    public function actionDatabed()

    {
       $count = Yii::$app->dbrs->createCommand('SELECT  clinic.name_of_clinic,
        CLASS_ROOM.NAME_OF_CLASS ,
        CLASS_ROOM.CLASS_ROOM_ID,
         (SELECT COUNT(BED_ID) FROM BEDS WHERE 
         CLASS_ROOM_ID = CLASS_ROOM.CLASS_ROOM_ID)  AS cap,
        CLASS_ROOM.class_id,
        CLASS_ROOM.tarif_id, 
        CLASS_ROOM.clinic_id, 
               
        (SELECT COUNT(no_registration) FROM treatment_akomodasi pv WHERE 
         pv.CLASS_ROOM_ID = CLASS_ROOM.CLASS_ROOM_ID and 
         pv.class_room_id is not null 
         and (pv.keluar_id = 0 or pv.keluar_id=33))  AS ISI,
        (SELECT SUM(TC.AMOUNT) FROM TARIF_COMP TC, treat_tarif TT
         WHERE TC.TARIF_ID = CLASS_ROOM.tarif_id AND TC.TARIF_ID = TT.TARIF_ID ) AS TARIF, null AS RUSAK, null AS SIAP, null AS RENOVASI         
FROM CLASS_ROOM, clinic 
where  CLASS_ROOM.isactive =1
      and CLASS_ROOM.clinic_id=clinic.clinic_id')->queryScalar();

       // $provider = new ->queryScalar();SqlDataProvider([
            $sql = 'SELECT  clinic.name_of_clinic as nama_bangsal,
        CLASS_ROOM.NAME_OF_CLASS as bangsal_kelas,
        CLASS_ROOM.CLASS_ROOM_ID,
         (SELECT COUNT(BED_ID) FROM BEDS WHERE 
         CLASS_ROOM_ID = CLASS_ROOM.CLASS_ROOM_ID)  AS kapasitas,
        CLASS_ROOM.class_id,
        CLASS_ROOM.tarif_id, 
        CLASS_ROOM.clinic_id, 
               
        (SELECT COUNT(no_registration) FROM treatment_akomodasi pv WHERE 
         pv.CLASS_ROOM_ID = CLASS_ROOM.CLASS_ROOM_ID and 
         pv.class_room_id is not null 
         and (pv.keluar_id = 0 or pv.keluar_id=33))  AS isi,
         (SELECT COUNT(BED_ID) FROM BEDS WHERE 
         CLASS_ROOM_ID = CLASS_ROOM.CLASS_ROOM_ID)-(SELECT COUNT(no_registration) FROM treatment_akomodasi pv WHERE 
         pv.CLASS_ROOM_ID = CLASS_ROOM.CLASS_ROOM_ID and 
         pv.class_room_id is not null 
         and (pv.keluar_id = 0 or pv.keluar_id=33))  AS kosong,
        (SELECT SUM(TC.AMOUNT) FROM TARIF_COMP TC, treat_tarif TT
         WHERE TC.TARIF_ID = CLASS_ROOM.tarif_id AND TC.TARIF_ID = TT.TARIF_ID ) AS TARIF, null AS RUSAK, null AS SIAP, null AS RENOVASI         
FROM CLASS_ROOM, clinic 
where  CLASS_ROOM.isactive =1
      and CLASS_ROOM.clinic_id=clinic.clinic_id';
        
         $provider = new SqlDataProvider ([
            'sql' => $sql,
            'pagination' => [
        'pageSize' => 10,
                            ],
         ]);

   
          return $this->render('bed',['provider'=>$provider]);
         
    }

    /**
     * Displays a single Pasien model.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($NO_REGISTRATION)
    {
        return $this->render('view', [
            'model' => $this->findModel($NO_REGISTRATION),
        ]);
    }

    /**
     * Creates a new Pasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pasien();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($NO_REGISTRATION)
    {
        $model = $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($NO_REGISTRATION, $ORG_UNIT_CODE)
    {
        $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE)->delete();

        return $this->redirect(['index']);
    }

   
    /**
     * Finds the Pasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @return Pasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($NO_REGISTRATION, $ORG_UNIT_CODE)
    {
        if (($model = Pasien::findOne(['NO_REGISTRATION' => $NO_REGISTRATION, 'ORG_UNIT_CODE' => $ORG_UNIT_CODE])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
