<?php
$this->breadcrumbs=array(
	'Paginases'=>array('index'),
	$model->id_paginaas=>array('view','id'=>$model->id_paginaas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paginas','url'=>array('index')),
	array('label'=>'Create Paginas','url'=>array('create')),
	array('label'=>'View Paginas','url'=>array('view','id'=>$model->id_paginaas)),
	array('label'=>'Manage Paginas','url'=>array('admin')),
);
?>

<h1>Update Paginas <?php echo $model->id_paginaas; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>