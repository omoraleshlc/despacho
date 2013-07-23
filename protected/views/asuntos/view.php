<?php
/* @var $this AsuntosController */
/* @var $model Asuntos */

$this->breadcrumbs=array(
	'Asuntoses'=>array('index'),
	$model->keyTA,
);

$this->menu=array(
	array('label'=>'List Asuntos', 'url'=>array('index')),
	array('label'=>'Create Asuntos', 'url'=>array('create')),
	array('label'=>'Update Asuntos', 'url'=>array('update', 'id'=>$model->keyTA)),
	array('label'=>'Delete Asuntos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asuntos', 'url'=>array('admin')),
);
?>

<h1>View Asuntos #<?php echo $model->keyTA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTA',
		'descripcion',
		'observaciones',
	),
)); ?>
