<?php
$this->breadcrumbs=array(
	'Contenidos',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills',
	'tabs'=>array(
			array('label'=>'Crear Contenidos','url'=>array('create')),
			array('label'=>'Gestión de Contenidos','url'=>array('admin')),	
			array('label'=>'Regresar a Temas','url'=>array('Temas/index')),	
			),
		));

?>

<h1>Contenidos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
