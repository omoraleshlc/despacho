<?php
/* @var $this AsuntosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asuntoses',
);

$this->menu=array(
	array('label'=>'Create Asuntos', 'url'=>array('create')),
	array('label'=>'Manage Asuntos', 'url'=>array('admin')),
);
?>

<h1>Asuntoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
