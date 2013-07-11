<?php
$this->breadcrumbs=array(
	'Ejemploses',
);

$this->menu=array(
	array('label'=>'Create Ejemplos','url'=>array('create')),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);
?>

<h1>Ejemploses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
