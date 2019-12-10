<?php

namespace app\controllers;

use Yii;
use app\models\PasienVisitation;
use app\models\PasienVisitationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;

/**
 * PasienVisitationController implements the CRUD actions for PasienVisitation model.
 */
class PasienVisitationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
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
     */
    public function actionView($VISIT_ID)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "PasienVisitation #".$VISIT_ID,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($VISIT_ID),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','$VISIT_ID'=>$VISIT_ID],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($VISIT_ID),
            ]);
        }
    }

    /**
     * Creates a new PasienVisitation model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new PasienVisitation();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new PasienVisitation",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new PasienVisitation",
                    'content'=>'<span class="text-success">Create PasienVisitation success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new PasienVisitation",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE, 'VISIT_ID' => $model->VISIT_ID]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
       
    }

    /**
     * Updates an existing PasienVisitation model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return mixed
     */
    public function actionUpdate($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID);       

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Update PasienVisitation #".$NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "PasienVisitation #".$NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID,
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID'=>$NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
            }else{
                 return [
                    'title'=> "Update PasienVisitation #".$NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE, 'VISIT_ID' => $model->VISIT_ID]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing PasienVisitation model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return mixed
     */
    public function actionDelete($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)
    {
        $request = Yii::$app->request;
        $this->findModel($NO_REGISTRATION, $ORG_UNIT_CODE, $VISIT_ID)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing PasienVisitation model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $NO_REGISTRATION
     * @param string $ORG_UNIT_CODE
     * @param string $VISIT_ID
     * @return mixed
     */
    public function actionBulkDelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
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
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
