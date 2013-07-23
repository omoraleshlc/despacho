<?php
/* @var $this ResponsablesController */
/* @var $model Responsables */

$this->breadcrumbs=array(
	'Responsables'=>array('index'),
	$model->keyR,
);

$this->menu=array(
	array('label'=>'Lista de Responsables', 'url'=>array('index')),
	array('label'=>'Crear Responsables', 'url'=>array('create')),
	array('label'=>'Actualizar Responsables', 'url'=>array('update', 'id'=>$model->keyR)),
	array('label'=>'Eliminar Responsables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Editar Responsables', 'url'=>array('admin')),
);
?>

<h1>Ver Responsables #<?php echo $model->keyR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyR',
		'nombreResponsable',
	),
)); ?>
