<?php

namespace app\controllers;

use Yii;
use app\models\PasienVisitation;
use app\models\PasienVisitationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasienVisitationController implements the CRUD actions for PasienVisitation model.
 */
class PasienVisitationController extends Controller
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
        $searchModel = new PasienVisitationSearch();
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
    public function actionView($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID),
        ]);
    }
    
    /**
     * Creates a new PasienVisitation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PasienVisitation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION,'VISIT_ID' => $model->VISIT_ID]);
        }

        return $this->render('create', [
            'model' => $model,
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
    public function actionUpdate($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)
    {
        $model = $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE, 'VISIT_ID' => $model->VISIT_ID]);
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
    protected function findModel($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)
    {
        if (($model = PasienVisitation::findOne(['NO_REGISTRATION' => $NO_REGISTRATION, 'ORG_UNIT_CODE' => $ORG_UNIT_CODE, 'VISIT_ID' => $VISIT_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
