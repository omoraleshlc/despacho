<?php
/* @var $this AsuntosController */
/* @var $model Asuntos */

$this->breadcrumbs=array(
	'Asuntoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Asuntos', 'url'=>array('index')),
	array('label'=>'Manage Asuntos', 'url'=>array('admin')),
);
?>

<h1>Create Asuntos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>