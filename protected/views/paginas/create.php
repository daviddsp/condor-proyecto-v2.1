<?php
$this->breadcrumbs=array(
	'Paginases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paginas','url'=>array('index')),
	array('label'=>'Manage Paginas','url'=>array('admin')),
);
?>

<h1>Create Paginas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>