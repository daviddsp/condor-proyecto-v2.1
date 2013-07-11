<?php
$this->breadcrumbs=array(
	'Ejemploses'=>array('index'),
	$model->id_ejemplos=>array('view','id'=>$model->id_ejemplos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ejemplos','url'=>array('index')),
	array('label'=>'Create Ejemplos','url'=>array('create')),
	array('label'=>'View Ejemplos','url'=>array('view','id'=>$model->id_ejemplos)),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);
?>

<h1>Update Ejemplos <?php echo $model->id_ejemplos; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>