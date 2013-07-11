<?php
$this->breadcrumbs=array(
	'Freferenciases'=>array('index'),
	$model->id_freferencias,
);

$this->menu=array(
	array('label'=>'List Freferencias','url'=>array('index')),
	array('label'=>'Create Freferencias','url'=>array('create')),
	array('label'=>'Update Freferencias','url'=>array('update','id'=>$model->id_freferencias)),
	array('label'=>'Delete Freferencias','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_freferencias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Freferencias','url'=>array('admin')),
);
?>

<h1>View Freferencias #<?php echo $model->id_freferencias; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_freferencias',
		'nb_freferencias',
		'fr_freferencias',
		'id_leccion',
	),
)); ?>
