<?php
$this->breadcrumbs=array(
	'Ejemplos'=>array('index'),
	'Gestión de Ejemplos',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
	/*array('label'=>'Lista Ejemplos','url'=>array('index')),*/
		array('label'=>'Crear Ejemplos','url'=>array('create')),
		array('label'=>'Regresar','url'=>array('index')),
	),
));


/*$this->menu=array(
	array('label'=>'List Ejemplos','url'=>array('index')),
	array('label'=>'Create Ejemplos','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ejemplos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Ejemplos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ejemplos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ejemplos',
		'nb_ejemplos',
		'cont_ejercicios',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
