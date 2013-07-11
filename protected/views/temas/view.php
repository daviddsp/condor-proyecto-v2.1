<?php
$this->breadcrumbs=array(
	'Temases'=>array('index'),
	$model->id_temas,
);

$this->menu=array(
	array('label'=>'List Temas','url'=>array('index')),
	array('label'=>'Create Temas','url'=>array('create')),
	array('label'=>'Update Temas','url'=>array('update','id'=>$model->id_temas)),
	array('label'=>'Delete Temas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_temas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Temas','url'=>array('admin')),
);
?>

<h1>View Temas #<?php echo $model->id_temas; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_temas',
		'nb_temas',
		'descrip_temas',
	),
)); ?>
