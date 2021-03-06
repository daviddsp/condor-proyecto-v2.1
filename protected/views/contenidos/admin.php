<?php
$this->breadcrumbs=array(
	'Contenidoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Contenidos','url'=>array('index')),
	array('label'=>'Create Contenidos','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('contenidos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contenidoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'contenidos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_contenidos',
		array ('name'=>'idlecciones','value'=>'$data->idlecciones->nb_lecciones','type'=>'text',),
		'id_ejemplos',
		'id_ejercicios',
		'id_fuente_referencias',
		'id_multimedia',
		array(
		'name'=>'descrip_contenidos',
		'type'=>'raw',
		),
		/*
		'descrip_contenidos',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
