<?php

namespace app\controllers;

use app\models\Jenisbarang;
use app\models\JenisbarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenisbarangController implements the CRUD actions for Jenisbarang model.
 */
class JenisbarangController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Jenisbarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JenisbarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jenisbarang model.
     * @param string $kode_jenis Kode Jenis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_jenis)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_jenis),
        ]);
    }

    /**
     * Creates a new Jenisbarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jenisbarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_jenis' => $model->kode_jenis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jenisbarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_jenis Kode Jenis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_jenis)
    {
        $model = $this->findModel($kode_jenis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_jenis' => $model->kode_jenis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jenisbarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_jenis Kode Jenis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_jenis)
    {
        $this->findModel($kode_jenis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jenisbarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_jenis Kode Jenis
     * @return Jenisbarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_jenis)
    {
        if (($model = Jenisbarang::findOne(['kode_jenis' => $kode_jenis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
