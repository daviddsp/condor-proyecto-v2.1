<?php
$this->breadcrumbs=array(
	'Fuentes',
);

$this->menu=array(
	array('label'=>'Create Fuentes','url'=>array('create')),
	array('label'=>'Manage Fuentes','url'=>array('admin')),
);
?>

<h1>Fuentes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
