<?php
/* @var $this DependientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dependientes',
);

$this->menu=array(
	array('label'=>'Agregar Dependientes', 'url'=>array('create&keyR='.Yii::app()->request->getQuery('keyR').'&responsable='.Yii::app()->request->getQuery('responsable'))),
	array('label'=>'Actualizar Dependientes', 'url'=>array('admin')),
);
?>
<h1>Responsable: <?php echo Yii::app()->request->getQuery('responsable');?></h1>
<h4>Agregar Dependientes</h4>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
