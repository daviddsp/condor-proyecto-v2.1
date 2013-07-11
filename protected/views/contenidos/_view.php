<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenidos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contenidos),array('view','id'=>$data->id_contenidos)); ?>
	<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenidos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contenidos),array('view','id'=>$data->id_contenidos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre de la Leccion')); ?>:</b>
	<?php echo CHtml::encode($data->idlecciones->nb_lecciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ejemplos')); ?>:
	<?php echo CHtml::encode($data->idEjemplos->nb_ejemplos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->idEjercicios->nb_ejercicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fuente_referencias')); ?>:</b>
	<?php echo CHtml::encode($data->idFuenteReferencias->fuente_referencias	); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_multimedia')); ?>:</b>
	<?php echo CHtml::encode($data->idMultimedia->url_multimedia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_contenidos')); ?>:</b>
	<?php //echo CHtml::encode($data->descrip_contenidos); ?>
	<br />
	

	
	<?php echo $data->descrip_contenidos; ?> <!--Hago un echo para que me muestre el contenido html dentro de TbListView-->
	

</div>