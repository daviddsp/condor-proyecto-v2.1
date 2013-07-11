<?php
$this->breadcrumbs=array(
	'Multimedias'=>array('index'),
	$model->id_multimedia,
);

$this->menu=array(
	array('label'=>'List Multimedia','url'=>array('index')),
	array('label'=>'Create Multimedia','url'=>array('create')),
	array('label'=>'Update Multimedia','url'=>array('update','id'=>$model->id_multimedia)),
	array('label'=>'Delete Multimedia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_multimedia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Multimedia','url'=>array('admin')),
);
?>

<h1>View Multimedia #<?php echo $model->id_multimedia; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_multimedia',
		'url_multimedia',
	),
)); ?>
