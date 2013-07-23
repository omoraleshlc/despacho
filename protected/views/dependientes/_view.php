<?php
/* @var $this DependientesController */
/* @var $data Dependientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyD), array('view', 'id'=>$data->keyD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyR')); ?>:</b>
	<?php echo CHtml::encode($data->keyR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre1')); ?>:</b>
	<?php echo CHtml::encode($data->nombre1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre2')); ?>:</b>
	<?php echo CHtml::encode($data->nombre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido3')); ?>:</b>
	<?php echo CHtml::encode($data->apellido3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCompleto')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCompleto); ?>
	<br />

	*/ ?>

</div>