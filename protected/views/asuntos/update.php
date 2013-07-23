<?php
/* @var $this AsuntosController */
/* @var $model Asuntos */

$this->breadcrumbs=array(
	'Asuntoses'=>array('index'),
	$model->keyTA=>array('view','id'=>$model->keyTA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Asuntos', 'url'=>array('index')),
	array('label'=>'Create Asuntos', 'url'=>array('create')),
	array('label'=>'View Asuntos', 'url'=>array('view', 'id'=>$model->keyTA)),
	array('label'=>'Manage Asuntos', 'url'=>array('admin')),
);
?>

<h1>Update Asuntos <?php echo $model->keyTA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>