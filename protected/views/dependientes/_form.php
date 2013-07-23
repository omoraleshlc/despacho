<?php
/* @var $this DependientesController */
/* @var $model Dependientes */
/* @var $form CActiveForm */
?>
<h3>Responsable: <?php echo Yii::app()->request->getQuery('responsable');?></h3>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dependientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
            <?php echo $form->hiddenField($model,'keyR',array('class'=>'input', 'value'=>Yii::app()->request->getQuery('keyR'))); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>15,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre1'); ?>
		<?php echo $form->textField($model,'nombre1',array('size'=>15,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre2'); ?>
		<?php echo $form->textField($model,'nombre2',array('size'=>15,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1'); ?>
		<?php echo $form->textField($model,'apellido1',array('size'=>15,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2'); ?>
		<?php echo $form->textField($model,'apellido2',array('size'=>15,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido3'); ?>
		<?php echo $form->textField($model,'apellido3',array('size'=>15,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido3'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->