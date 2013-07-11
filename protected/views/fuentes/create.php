<?php
$this->breadcrumbs=array(
	'Fuentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fuentes','url'=>array('index')),
	array('label'=>'Manage Fuentes','url'=>array('admin')),
);
?>

<h1>Create Fuentes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>