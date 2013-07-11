<?php
$this->breadcrumbs=array(
	'Paginases',
);

$this->menu=array(
	array('label'=>'Create Paginas','url'=>array('create')),
	array('label'=>'Manage Paginas','url'=>array('admin')),
);
?>

<h1>Paginases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
