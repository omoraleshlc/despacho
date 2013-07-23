<?php
/* @var $this DependientesController */
/* @var $model Dependientes */

$this->breadcrumbs=array(
	'Dependientes'=>array('index'),
	$model->keyD,
);

$this->menu=array(
	array('label'=>'Lista Dependientes', 'url'=>array('index')),
	array('label'=>'Nuevo Dependientes', 'url'=>array('create')),
	array('label'=>'Actualizar Dependientes', 'url'=>array('update', 'id'=>$model->keyD)),
	array('label'=>'Eliminar Dependientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Editar Dependientes', 'url'=>array('admin')),
);
?>

<h1>Lista de Dependientes<?php echo $model->keyD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyD',
		'keyR',
		'nombre',
		'nombre1',
		'nombre2',
		'apellido1',
		'apellido2',
		'apellido3',
		'nombreCompleto',
	),
)); ?>
