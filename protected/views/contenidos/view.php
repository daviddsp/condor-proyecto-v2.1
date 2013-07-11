<?php
$this->breadcrumbs=array(
	'Contenidos'=>array('index'),
	$model->id_contenidos,
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
	/*array('label'=>'Lista Ejemplos','url'=>array('index')),*/
		array('label'=>'Crear Contenidos','url'=>array('create')),
		array('label'=>'Actualizar Contenidos','url'=>array('update','id'=>$model->id_contenidos)),
		array('label'=>'Borrar Contenidos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contenidos),'confirm'=>'Usted Realmente quiere eliminar este Contenido?')),
		array('label'=>'Gestión de Contenidos','url'=>array('admin')),
		array('label'=>'Regresar','url'=>array('index')),
	),
));


/*$this->menu=array(
	array('label'=>'List Contenidos','url'=>array('index')),
	array('label'=>'Create Contenidos','url'=>array('create')),
	array('label'=>'Update Contenidos','url'=>array('update','id'=>$model->id_contenidos)),
	array('label'=>'Delete Contenidos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contenidos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contenidos','url'=>array('admin')),
);*/
?>


<!--<?//php echo $model->descrip_contenidos; ?> #Sirve para imprimir el descripcion del contenido en la pagina-->
<!--<?#php echo $model->id_multimedia; ?>	   #Sirve para imprimir el id_multimedia del contenido en la pagina-->
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_contenidos',
		'idlecciones.nb_lecciones',
		'idEjemplos.cont_ejemplos',
		'idEjercicios.cont_ejercicios',
		'idFuenteReferencias.fuente_referencias',
		'idMultimedia.url_multimedia',
		array(
			'name'=>'descrip_contenidos',
			'type'=>'raw',
		),
	),
)); 

?>
