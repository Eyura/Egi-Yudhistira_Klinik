<?php

class PasienController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Pasien');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $this->render('view', array(
            'model' => $model,
        ));
    }

    public function actionCreate()
    {
        $model = new Pasien;

        if (isset($_POST['Pasien'])) {
            $model->attributes = $_POST['Pasien'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Pasien'])) {
            $model->attributes = $_POST['Pasien'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();
        $this->redirect(array('index'));
    }

    public function loadModel($id)
    {
        $model = Pasien::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'Data pasien tidak ditemukan.');
        }
        return $model;
    }
}


?>