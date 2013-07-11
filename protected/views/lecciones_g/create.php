<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lecciones','url'=>array('index')),
	array('label'=>'Manage Lecciones','url'=>array('admin')),
);
?>

<h1>Create Lecciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>