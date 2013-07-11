<?php
$this->breadcrumbs=array(
	'Multimedias',
);

$this->menu=array(
	array('label'=>'Create Multimedia','url'=>array('create')),
	array('label'=>'Manage Multimedia','url'=>array('admin')),
);
?>

<h1>Multimedias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
