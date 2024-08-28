<?php

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'wilayah-form',
    'enableAjaxValidation' => false,
)); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'nama'); ?>
        <?php echo $form->textField($model, 'nama', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'nama'); ?>
    </div>

    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>


?>
