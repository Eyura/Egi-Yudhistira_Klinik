<?php
    class TagihanController extends Controller
    {
        public function actionCreate()
        {
            $model = new Tagihan;

            if (isset($_POST['Tagihan'])) {
                $model->attributes = $_POST['Tagihan'];
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->id));
            }

            $this->render('create', array('model' => $model));
        }

        // Methods for update, view, delete, and index would be similar to other controllers
    }
?>