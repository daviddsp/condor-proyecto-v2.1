<?php
$this->breadcrumbs=array(
	'Freferenciases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Freferencias','url'=>array('index')),
	array('label'=>'Manage Freferencias','url'=>array('admin')),
);
?>

<h1>Create Freferencias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>