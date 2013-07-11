<?php
$this->breadcrumbs=array(
	'Paginases'=>array('index'),
	$model->id_paginaas,
);

$this->menu=array(
	array('label'=>'List Paginas','url'=>array('index')),
	array('label'=>'Create Paginas','url'=>array('create')),
	array('label'=>'Update Paginas','url'=>array('update','id'=>$model->id_paginaas)),
	array('label'=>'Delete Paginas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_paginaas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paginas','url'=>array('admin')),
);
?>

<h1>View Paginas #<?php echo $model->id_paginaas; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_paginaas',
		'id_usuario',
		'id_temas',
		'id_lecciones',
		'id_multimedia',
		'id_contenidos',
		'id_usuarios_lecciones',
		'id_ejemplos',
		'id_ejercicios',
		'id_fuente_referencias',
	),
)); ?>
