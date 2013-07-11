<?php
$this->breadcrumbs=array(
	'Ejemplos'=>array('index'),
	$model->id_ejemplos,
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
	/*array('label'=>'Lista Ejemplos','url'=>array('index')),*/
	array('label'=>'Crear Ejemplos','url'=>array('create')),
	array('label'=>'Actualizar Ejemplos','url'=>array('update','id'=>$model->id_ejemplos)),
	array('label'=>'Borrar Ejemplos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ejemplos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestión de Ejemplos','url'=>array('admin')),
	array('label'=>'Regresar','url'=>array('index')),
	),
));

/*$this->menu=array(
	array('label'=>'List Ejemplos','url'=>array('index')),
	array('label'=>'Create Ejemplos','url'=>array('create')),
	array('label'=>'Update Ejemplos','url'=>array('update','id'=>$model->id_ejemplos)),
	array('label'=>'Delete Ejemplos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ejemplos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);*/
?>

<h1>Vista de Ejemplos #<?php echo $model->id_ejemplos; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_ejemplos',
		'nb_ejemplos',
		'cont_ejercicios',
	),
)); ?>
