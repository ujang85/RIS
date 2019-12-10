<?php

namespace app\controllers;

use Yii;
use app\models\InputPeriksa;
use app\models\InputPeriksaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\RegPasien;
use app\models\RegPasienSearch;

/**
 * InputPeriksaController implements the CRUD actions for InputPeriksa model.
 */
class InputPeriksaController extends Controller
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
     * Lists all InputPeriksa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InputPeriksaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionRegister()
    {
    	$model = new InputPeriksa();
        $searchModel2 = new RegPasienSearch();
        $dataProvider2 = $searchModel2->search(Yii::$app->request->queryParams);

        return $this->render('data_register', [
            'model' => $model,
            'searchModel' => $searchModel2,
            'dataProvider' => $dataProvider2,
        ]);
    }
    /**
     * Displays a single InputPeriksa model.
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

    /**
     * Creates a new InputPeriksa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateXX()
    {
        $model = new InputPeriksa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_periksa]);
        }

        $searchModel = new RegPasienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('create', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
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








    /**
     * Updates an existing InputPeriksa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_periksa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InputPeriksa model.
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

    /**
     * Finds the InputPeriksa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InputPeriksa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InputPeriksa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
