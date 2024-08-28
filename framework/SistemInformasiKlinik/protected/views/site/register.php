<?php
$this->pageTitle = 'Pendaftaran';
$this->breadcrumbs = array(
    'Pendaftaran',
);
?>
<div class="text-center mt-5">
	<h3>Pendaftaran</h3>
</div>

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow p-4" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Daftar</h5>
            
            <?php $form = $this->beginWidget('CActiveForm', array(
                'id' => 'register-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array(
                    'class' => 'form-horizontal',
                ),
            )); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'nama', array('class' => 'col-sm-12 control-label')); ?>
                <div class="col-sm-12">
                    <?php echo $form->textField($model, 'nama', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'nama'); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-12 control-label')); ?>
                <div class="col-sm-12">
                    <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-12 control-label')); ?>
                <div class="col-sm-12">
                    <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'password'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <?php echo CHtml::submitButton('Daftar', array('class' => 'btn btn-primary')); ?>
                </div>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
