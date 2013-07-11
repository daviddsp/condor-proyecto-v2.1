<h1>Lista de Temas</h1>

<?php
$this->breadcrumbs=array(
	'Temas',
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'type' => 'pills',
	'tabs' => array(
		array('label' => 'Temas', 
		'items'=> array(
			array('label'=>'Crear Temas','url'=>array('create')),
			array('label'=>'Gestión de Temas','url'=>array('admin')),
			),
		),
#----------------------------------------------------------------------------------------------#
		
		/* Lecciones */
		array('label' => 'Lecciones', 
			'items'=> array(
				array('label'=>'Lista de Lecciones','url'=>array('/Lecciones/index')),
				array('label'=>'Crear Lecciones','url'=>array('/Lecciones/create')),
				array('label'=>'Gestión de Lecciones','url'=>array('/Lecciones/admin')),
			),
		),
		/* /Lecciones */
		
#----------------------------------------------------------------------------------------------#	
		
		/* Contenido */
		array('label' => 'Contenidos', 
			'items'=> array(
				array('label'=>'Lista de Contenidos','url'=>array('/Contenidos/index')),
				array('label'=>'Crear Contenidos','url'=>array('/Contenidos/create')),
				array('label'=>'Gestión de Contenidos','url'=>array('/Contenidos/admin')),
			),
		),
		/* /Contenidos */

#----------------------------------------------------------------------------------------------#	
		
		/* Ejemplos */
		array('label' => 'Ejemplos', 
			'items'=> array(
				array('label'=>'Lista de Ejemplos','url'=>array('/Ejemplos/index')),
				array('label'=>'Crear Ejemplos','url'=>array('/Ejemplos/create')),
				array('label'=>'Gestión de Ejemplos','url'=>array('/Ejemplos/admin')),
			),
		),
		/* /Ejemplos */

#----------------------------------------------------------------------------------------------#	
		
		/* Ejercicios */
		array('label' => 'Ejercicios', 
			'items'=> array(
				array('label'=>'Lista de Ejercicios','url'=>array('/Ejercicios/index')),
				array('label'=>'Crear Ejercicios','url'=>array('/Ejercicios/create')),
				array('label'=>'Gestión de Ejercicios','url'=>array('/Ejercicios/admin')),
			),
		),
		/* /Ejercicios */

#----------------------------------------------------------------------------------------------#	
		
		/* Fuentes */
		array('label' => 'Fuentes', 
			'items'=> array(
				array('label'=>'Lista de Fuentes','url'=>array('/Fuentes/index')),
				array('label'=>'Crear Fuentes','url'=>array('/Fuentes/create')),
				array('label'=>'Gestión de Fuentes','url'=>array('/Fuentes/admin')),
			),
		),
		/* /Fuentes */
		
#----------------------------------------------------------------------------------------------#	
		
		/* Multimedia */
		array('label' => 'Multimedia', 
			'items'=> array(
				array('label'=>'Lista de Multimedia','url'=>array('/Multimedia/index')),
				array('label'=>'Crear Multimedia','url'=>array('/Multimedia/create')),
				array('label'=>'Gestión de Multimedia','url'=>array('/Multimedia/admin')),
			),
		),
		/* /Multimedia */
		
	
	))
);

/*
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'pills', // 'tabs' or 'pills'
	
	'tabs'=>array(
		array('label'=>'Crear Temas','url'=>array('create')),
		array('label'=>'Gestión de Temas','url'=>array('admin')),
		array('label'=>'Lista de Lecciones','url'=>array('Lecciones/index')),
		array('label'=>'Lista de Contenidos','url'=>array('/Contenidos/index')),
		array('label'=>'Lista de Ejemplos','url'=>array('/Ejemplos/index')),
		array('label'=>'Lista de Ejercicios','url'=>array('/Ejercicios/index')),
		array('label'=>'Lista de Fuentes','url'=>array('/Fuentes/index')),
		array('label'=>'Lista de Multimedia','url'=>array('/Multimedia/index')),
	),
));*/
/*
$this->menu=array(
	array('label'=>'Create Temas','url'=>array('create')),
	array('label'=>'Manage Temas','url'=>array('admin')),
	array('label'=>'Lista de Lecciones','url'=>array('Lecciones/index')),
);*/
?>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
