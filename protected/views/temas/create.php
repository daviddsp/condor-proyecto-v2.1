<?php
$this->breadcrumbs=array(
	'Temas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Temas','url'=>array('index')),
	array('label'=>'Gestión de Temas','url'=>array('admin')),
);
?>

<h1>Crear Temas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>