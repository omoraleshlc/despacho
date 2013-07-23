<?php
/* @var $this CatCajaController */
/* @var $data CatCaja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyC')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyC), array('view', 'id'=>$data->keyC)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codCaja')); ?>:</b>
	<?php echo CHtml::encode($data->codCaja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionCaja')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionCaja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code1')); ?>:</b>
	<?php echo CHtml::encode($data->code1); ?>
	<br />


</div>