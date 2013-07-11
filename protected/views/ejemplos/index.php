<?php
$this->breadcrumbs=array(
	'Ejemplos',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
		array('label'=>'Crear Ejemplos','url'=>array('create')),
		array('label'=>'Gestión de Ejemplos','url'=>array('admin')),
		array('label'=>'Regresar a Temas','url'=>array('/Temas/index')),
	),
));

/*$this->menu=array(
	array('label'=>'Create Ejemplos','url'=>array('create')),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);*/
?>

<h1>Lista de Ejemplos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
