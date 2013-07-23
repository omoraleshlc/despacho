<?php
/* @var $this CatCajaController */
/* @var $model CatCaja */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cat-caja-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codCaja'); ?>
		<?php echo $form->textField($model,'codCaja',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'codCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionCaja'); ?>
		<?php echo $form->textField($model,'descripcionCaja',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descripcionCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code1'); ?>
		<?php echo $form->textField($model,'code1'); ?>
		<?php echo $form->error($model,'code1'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->