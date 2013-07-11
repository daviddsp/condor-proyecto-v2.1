<div class="view">
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'temas-grid',
	'type'=>'bordered',
	'template'=>"{items}",
	'dataProvider'=>$data->search(),

	'columns'=>array(
		'id_temas',
		'nb_temas',
		'descrip_temas',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}', //detalle de los botones 
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver Lecciones',
					'url'=>"CHtml::normalizeUrl(array('/Lecciones_g/view', 'id'=>\$data->id_temas))",
					'imageUrl'=>Yii::app()->request->baseUrl.'../img/update.png', //ruta de la imagen del boton que queremos agregar
					'options' => array('class'=>'temas'),
		  		),
		 	),
	    ),
	),
)); 
?>
</div>
