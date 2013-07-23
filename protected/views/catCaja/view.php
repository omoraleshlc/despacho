<?php
/* @var $this CatCajaController */
/* @var $model CatCaja */

$this->breadcrumbs=array(
	'Cat Cajas'=>array('index'),
	$model->keyC,
);

$this->menu=array(
	array('label'=>'List CatCaja', 'url'=>array('index')),
	array('label'=>'Create CatCaja', 'url'=>array('create')),
	array('label'=>'Update CatCaja', 'url'=>array('update', 'id'=>$model->keyC)),
	array('label'=>'Delete CatCaja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatCaja', 'url'=>array('admin')),
);
?>

<h1>View CatCaja #<?php echo $model->keyC; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyC',
		'codCaja',
		'descripcionCaja',
		'code1',
	),
)); ?>
