<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	'Crear',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	'tabs'=>array(
	array('label'=>'Gestión de Lecciones','url'=>array('admin')),
	array('label'=>'Regresar a Lecciones','url'=>array('index')),
	),
));


/*$this->menu=array(
	array('label'=>'Lista de Lecciones','url'=>array('index')),
	array('label'=>'Gestión de Lecciones','url'=>array('admin')),
);*/
?>

<h1>Crear Lecciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>