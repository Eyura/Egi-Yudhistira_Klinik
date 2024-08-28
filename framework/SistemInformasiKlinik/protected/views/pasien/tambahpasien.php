<?php $form = $this->beginWidget('CActiveForm'); ?>

<div class="row">
    <?php echo $form->labelEx($model, 'nama'); ?>
    <?php echo $form->textField($model, 'nama'); ?>
    <?php echo $form->error($model, 'nama'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'alamat'); ?>
    <?php echo $form->textField($model, 'alamat'); ?>
    <?php echo $form->error($model, 'alamat'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
    <?php echo $form->textField($model, 'tanggal_lahir'); ?>
    <?php echo $form->error($model, 'tanggal_lahir'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model, 'nomor_telepon'); ?>
    <?php echo $form->textField($model, 'nomor_telepon'); ?>
    <?php echo $form->error($model, 'nomor_telepon'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>
