<?php
$this->breadcrumbs=array(
	'Temases'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Temas','url'=>array('index')),
	array('label'=>'Create Temas','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('temas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Temases</h1>

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
	'id'=>'temas-grid',
	'type'=>'bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_temas',
		'nb_temas',
		'descrip_temas',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		
		'template' => '{view} {update}', //detalle de los botones 
'buttons'=>array(
'view' => array(
'label'=>'ver lecciones',
'url'=>"CHtml::normalizeUrl(array('/Temas/view', 'id'=>\$data->id_temas))",
'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png', //ruta de la imagen del boton que queremos agregar
//'options' => array('class'=>'vehiculo'),
),
),

		
	
		
		
		),
	),
)); ?>
