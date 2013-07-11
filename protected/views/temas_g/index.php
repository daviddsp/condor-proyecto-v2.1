<?php
$this->breadcrumbs=array(
	'Temas',
);

/*$this->menu=array(
	array('label'=>'Create Temas','url'=>array('create')),
	array('label'=>'Manage Temas','url'=>array('admin')),
);*/
?>

<h1>Lista de Temas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
