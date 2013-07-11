<?php
$this->breadcrumbs=array(
	'Contenidoses'=>array('index'),
	$model->id_contenidos,
);

$this->menu=array(
	array('label'=>'List Contenidos','url'=>array('index')),
	array('label'=>'Create Contenidos','url'=>array('create')),
	array('label'=>'Update Contenidos','url'=>array('update','id'=>$model->id_contenidos)),
	array('label'=>'Delete Contenidos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contenidos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contenidos','url'=>array('admin')),
);
?>

<h1>View Contenidos #<?php echo $model->id_contenidos; ?></h1>
<!--<?//php echo $model->descrip_contenidos; ?> #Sirve para imprimir el descripcion del contenido en la pagina-->
<!--<?#php echo $model->id_multimedia; ?>	   #Sirve para imprimir el id_multimedia del contenido en la pagina-->
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_contenidos',
		'id_lecciones',
		'id_ejemplos',
		'id_ejercicios',
		'id_fuente_referencias',
		'id_multimedia',
		array(
			'name'=>'descrip_contenidos',
			'type'=>'raw',
		),
	),
)); ?>