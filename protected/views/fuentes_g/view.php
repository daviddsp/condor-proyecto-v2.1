<?php
$this->breadcrumbs=array(
	'Fuentes'=>array('index'),
	$model->id_fuente_referencias,
);

$this->menu=array(
	array('label'=>'List Fuentes','url'=>array('index')),
	array('label'=>'Create Fuentes','url'=>array('create')),
	array('label'=>'Update Fuentes','url'=>array('update','id'=>$model->id_fuente_referencias)),
	array('label'=>'Delete Fuentes','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fuente_referencias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fuentes','url'=>array('admin')),
);
?>

<h1>View Fuentes #<?php echo $model->id_fuente_referencias; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_fuente_referencias',
		'fuente_referencias',
	),
)); ?>
