<?php

namespace omerhamsi\content\controllers;

use omerhamsi\content\models\Yorumlar;
use Yii;
use omerhamsi\content\models\Urunler;
use omerhamsi\content\models\UrunlerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UrunlerController implements the CRUD actions for Urunler model.
 */
class UrunlerController extends Controller
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
     * Lists all Urunler models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UrunlerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Urunler model.
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

    public function actionComment($id){

        return $this->render('comment', [
            'model' => $this->findModel($id),
        ]);

        /*
        $model=$this->findModel($id);
      foreach ($model->yorumlars as $yorumlar){
           return $this->render('comment', [
              'model' => $yorumlar,
          ]);
      }*/
    }

    /**
     * Creates a new Urunler model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionEkleme($id){
     $model=new Yorumlar();
     $model->yorumid=$id;
     if ($model->load(Yii::$app->request->post()) && $model->save()) {
         return $this->render('comment', [
             'model' => $this->findModel($id),
         ]);
     }

     return $this->render('newcomment', [
            'model' => $model,
     ]);
    }
    public function actionCreate()
    {
        $model = new Urunler();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Urunler model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionSil($id,$modelid){
        if (($model = Yorumlar::findOne($id)) !== null) {
            $model->delete();
            return $this->render('comment', [
                'model' => $this->findModel($modelid),
            ]);
        }
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Urunler model.
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
    public function actionDelete2($id)
    {
        $model=$this->findModel($id);
        foreach ($model->yorumlars as $yorum){
            $yorum->delete();
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Urunler model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Urunler the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    protected function findModel($id)
    {
        if (($model = Urunler::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
