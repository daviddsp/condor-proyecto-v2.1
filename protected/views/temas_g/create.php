<?php
$this->breadcrumbs=array(
	'Temases'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Temas','url'=>array('index')),
	array('label'=>'Manage Temas','url'=>array('admin')),
);*/
?>

<h1>Create Temas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>