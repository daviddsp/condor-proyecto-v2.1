<?php
$this->breadcrumbs=array(
	'Contenidos'=>array('index'),
	'Crear',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
		array('label'=>'Lista de Contenidos','url'=>array('index')),
		array('label'=>'Gestión de Contenidos','url'=>array('admin')),
	),
));


/*$this->menu=array(
	array('label'=>'List Contenidos','url'=>array('index')),
	array('label'=>'Manage Contenidos','url'=>array('admin')),
);*/
?>

<h1>Crear Contenidos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>