<?php
$this->breadcrumbs=array(
	'Ejercicioses'=>array('index'),
	$model->id_ejercicios=>array('view','id'=>$model->id_ejercicios),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ejercicios','url'=>array('index')),
	array('label'=>'Create Ejercicios','url'=>array('create')),
	array('label'=>'View Ejercicios','url'=>array('view','id'=>$model->id_ejercicios)),
	array('label'=>'Manage Ejercicios','url'=>array('admin')),
);
?>

<h1>Update Ejercicios <?php echo $model->id_ejercicios; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>