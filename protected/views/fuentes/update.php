<?php
$this->breadcrumbs=array(
	'Fuentes'=>array('index'),
	$model->id_fuente_referencias=>array('view','id'=>$model->id_fuente_referencias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fuentes','url'=>array('index')),
	array('label'=>'Create Fuentes','url'=>array('create')),
	array('label'=>'View Fuentes','url'=>array('view','id'=>$model->id_fuente_referencias)),
	array('label'=>'Manage Fuentes','url'=>array('admin')),
);
?>

<h1>Update Fuentes <?php echo $model->id_fuente_referencias; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>