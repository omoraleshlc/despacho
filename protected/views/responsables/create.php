<?php
/* @var $this ResponsablesController */
/* @var $model Responsables */

$this->breadcrumbs=array(
	'Responsables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Responsables', 'url'=>array('index')),
	array('label'=>'Manage Responsables', 'url'=>array('admin')),
);
?>

<h1>Crear Responsables</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>