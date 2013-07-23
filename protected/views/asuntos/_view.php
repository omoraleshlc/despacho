<?php
/* @var $this AsuntosController */
/* @var $data Asuntos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyTA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyTA), array('view', 'id'=>$data->keyTA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>