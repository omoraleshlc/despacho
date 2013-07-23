<?php
/* @var $this CatCajaController */
/* @var $model CatCaja */

$this->breadcrumbs=array(
	'Cat Cajas'=>array('index'),
	$model->keyC=>array('view','id'=>$model->keyC),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatCaja', 'url'=>array('index')),
	array('label'=>'Create CatCaja', 'url'=>array('create')),
	array('label'=>'View CatCaja', 'url'=>array('view', 'id'=>$model->keyC)),
	array('label'=>'Manage CatCaja', 'url'=>array('admin')),
);
?>

<h1>Update CatCaja <?php echo $model->keyC; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>