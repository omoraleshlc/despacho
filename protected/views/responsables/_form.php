<?php
/* @var $this ResponsablesController */
/* @var $model Responsables */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'responsables-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreResponsable'); ?>
		<?php echo $form->textField($model,'nombreResponsable',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombreResponsable'); ?>
	</div>
        
       

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->