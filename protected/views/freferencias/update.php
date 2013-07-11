<?php
$this->breadcrumbs=array(
	'Freferenciases'=>array('index'),
	$model->id_freferencias=>array('view','id'=>$model->id_freferencias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Freferencias','url'=>array('index')),
	array('label'=>'Create Freferencias','url'=>array('create')),
	array('label'=>'View Freferencias','url'=>array('view','id'=>$model->id_freferencias)),
	array('label'=>'Manage Freferencias','url'=>array('admin')),
);
?>

<h1>Update Freferencias <?php echo $model->id_freferencias; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>