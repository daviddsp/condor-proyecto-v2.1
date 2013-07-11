<?php
$this->breadcrumbs=array(
	'Contenidos'=>array('index'),
	$model->id_contenidos=>array('view','id'=>$model->id_contenidos),
	'Actualizar',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
		array('label'=>'Lista de Contenidos','url'=>array('index')),
		array('label'=>'Crear Contenidos','url'=>array('create')),
		array('label'=>'Ver Contenidos','url'=>array('view','id'=>$model->id_contenidos)),
		array('label'=>'Gestión de Contenidos','url'=>array('admin')),
	),
));

/*$this->menu=array(
	array('label'=>'List Contenidos','url'=>array('index')),
	array('label'=>'Create Contenidos','url'=>array('create')),
	array('label'=>'View Contenidos','url'=>array('view','id'=>$model->id_contenidos)),
	array('label'=>'Manage Contenidos','url'=>array('admin')),
);*/
?>

<h1>Actualizar Contenidos <?php echo $model->id_contenidos; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>