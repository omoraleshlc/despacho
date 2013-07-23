<?php
/* @var $this CatCajaController */
/* @var $model CatCaja */

$this->breadcrumbs=array(
	'Cat Cajas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatCaja', 'url'=>array('index')),
	array('label'=>'Manage CatCaja', 'url'=>array('admin')),
);
?>

<h1>Create CatCaja</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>