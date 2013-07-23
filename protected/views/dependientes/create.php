<?php
/* @var $this DependientesController */
/* @var $model Dependientes */

$this->breadcrumbs=array(
	'Dependientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Dependientes', 'url'=>array('index')),
	array('label'=>'Editar Dependientes', 'url'=>array('admin')),
);
?>

<h1>Agregar Dependientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>