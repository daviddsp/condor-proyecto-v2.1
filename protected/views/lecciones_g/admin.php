<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	'Manage',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	'tabs'=>array(
			array('label'=>'Regresar a Temas','url'=>array('/Temas_g/index')),
	),
));

/*$this->menu=array(
	array('label'=>'List Lecciones','url'=>array('index')),
	array('label'=>'Create Lecciones','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lecciones-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Lecciones</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'lecciones-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_lecciones',
		//'id_temas',
		'nb_lecciones',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
