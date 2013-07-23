<?php
/* @var $this ResponsablesController */
/* @var $model Responsables */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyR'); ?>
		<?php echo $form->textField($model,'keyR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreResponsable'); ?>
		<?php echo $form->textField($model,'nombreResponsable',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->