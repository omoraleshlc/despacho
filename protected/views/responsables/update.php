<?php
/* @var $this ResponsablesController */
/* @var $model Responsables */

$this->breadcrumbs=array(
	'Responsables'=>array('index'),
	$model->keyR=>array('view','id'=>$model->keyR),
	'Update',
);

$this->menu=array(
	array('label'=>'List Responsables', 'url'=>array('index')),
	array('label'=>'Create Responsables', 'url'=>array('create')),
	array('label'=>'View Responsables', 'url'=>array('view', 'id'=>$model->keyR)),
	array('label'=>'Manage Responsables', 'url'=>array('admin')),
);
?>

<h1>Update Responsables <?php echo $model->keyR; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>