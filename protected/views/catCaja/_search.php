<?php
/* @var $this CatCajaController */
/* @var $model CatCaja */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyC'); ?>
		<?php echo $form->textField($model,'keyC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codCaja'); ?>
		<?php echo $form->textField($model,'codCaja',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionCaja'); ?>
		<?php echo $form->textField($model,'descripcionCaja',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code1'); ?>
		<?php echo $form->textField($model,'code1'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->