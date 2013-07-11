<?php
$this->breadcrumbs=array(
	'Ejemplos'=>array('index'),
	'Crear',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
		array('label'=>'Gestión de Ejemplos','url'=>array('admin')),
		array('label'=>'Regresar','url'=>array('/Ejemplos/index')),
	),
));

/*$this->menu=array(
	array('label'=>'List Ejemplos','url'=>array('index')),
	array('label'=>'Manage Ejemplos','url'=>array('admin')),
);*/
?>

<h1>Crear Ejemplos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>