<?php
$this->breadcrumbs=array(
	'Ejercicioses'=>array('index'),
	$model->id_ejercicios,
);

$this->menu=array(
	array('label'=>'List Ejercicios','url'=>array('index')),
	array('label'=>'Create Ejercicios','url'=>array('create')),
	array('label'=>'Update Ejercicios','url'=>array('update','id'=>$model->id_ejercicios)),
	array('label'=>'Delete Ejercicios','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ejercicios),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ejercicios','url'=>array('admin')),
);
?>

<h1>View Ejercicios #<?php echo $model->id_ejercicios; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_ejercicios',
		'nb_ejercicios',
		'des_ejercicios',
		'cont_ejercicios',
	),
)); ?>
