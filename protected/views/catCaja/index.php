<?php
/* @var $this CatCajaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Cajas',
);

$this->menu=array(
	array('label'=>'Create CatCaja', 'url'=>array('create')),
	array('label'=>'Manage CatCaja', 'url'=>array('admin')),
);
?>

<h1>Cat Cajas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
