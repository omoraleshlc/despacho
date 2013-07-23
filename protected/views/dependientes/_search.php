<?php
/* @var $this DependientesController */
/* @var $model Dependientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyD'); ?>
		<?php echo $form->textField($model,'keyD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyR'); ?>
		<?php echo $form->textField($model,'keyR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre1'); ?>
		<?php echo $form->textField($model,'nombre1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre2'); ?>
		<?php echo $form->textField($model,'nombre2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1'); ?>
		<?php echo $form->textField($model,'apellido1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2'); ?>
		<?php echo $form->textField($model,'apellido2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido3'); ?>
		<?php echo $form->textField($model,'apellido3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreCompleto'); ?>
		<?php echo $form->textField($model,'nombreCompleto',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->