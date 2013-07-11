<?php
$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Usuario','url'=>array('create')),
	array('label'=>'Gestión de Usuarios','url'=>array('admin')), /* Se le puede agregar la validación para que el usuario que pueda visualizar esto sea el administrador */
);
?>

<h1>Usuarios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
