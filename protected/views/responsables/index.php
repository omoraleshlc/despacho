<?php
/* @var $this ResponsablesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Responsables',
);

$this->menu=array(
	array('label'=>'Crear Responsables', 'url'=>array('create')),
	array('label'=>'Actualizar Responsables', 'url'=>array('admin')),
);
?>

<h1>Alta de Responsables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
