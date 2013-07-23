<?php
/* @var $this DependientesController */
/* @var $model Dependientes */

$this->breadcrumbs=array(
	'Dependientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dependientes', 'url'=>array('index')),
	array('label'=>'Create Dependientes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dependientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dependientes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dependientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyD',
		'keyR',
		'nombre',
		'nombre1',
		'nombre2',
		'apellido1',
		/*
		'apellido2',
		'apellido3',
		'nombreCompleto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
