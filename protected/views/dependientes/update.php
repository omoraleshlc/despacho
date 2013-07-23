<?php
/* @var $this DependientesController */
/* @var $model Dependientes */

$this->breadcrumbs=array(
	'Dependientes'=>array('index'),
	$model->keyD=>array('view','id'=>$model->keyD),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dependientes', 'url'=>array('index')),
	array('label'=>'Create Dependientes', 'url'=>array('create')),
	array('label'=>'View Dependientes', 'url'=>array('view', 'id'=>$model->keyD)),
	array('label'=>'Manage Dependientes', 'url'=>array('admin')),
);
?>

<h1>Update Dependientes <?php echo $model->keyD; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>