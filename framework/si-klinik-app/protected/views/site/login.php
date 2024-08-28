<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow p-4" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Masuk</h5>

            <?php $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            )); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'username', array('class' => 'form-label')); ?>
                <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'username', array('class' => 'text-danger')); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'password', array('class' => 'form-label')); ?>
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'password', array('class' => 'text-danger')); ?>
            </div>

            <div class="text-center mt-4">
                <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary w-100')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>