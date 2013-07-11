<?php
$this->breadcrumbs=array(
	'Ejemploses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ejemplos','url'=>array('index')),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);
?>

<h1>Create Ejemplos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>