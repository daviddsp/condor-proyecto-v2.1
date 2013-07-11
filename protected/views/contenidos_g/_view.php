<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenidos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contenidos),array('view','id'=>$data->id_contenidos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lecciones')); ?>:</b>
	<?php echo CHtml::encode($data->id_lecciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejemplos')); ?>:</b>
	<?php echo CHtml::encode($data->id_ejemplos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->id_ejercicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fuente_referencias')); ?>:</b>
	<?php echo CHtml::encode($data->id_fuente_referencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_multimedia')); ?>:</b>
	<?php echo CHtml::encode($data->id_multimedia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_contenidos')); ?>:</b>
	<?php //echo CHtml::encode($data->descrip_contenidos); ?> <!--En caso de que quiera colocar el contenido aunque lo duplica-->
	<br />
	
	<?php echo $data->descrip_contenidos; ?> <!--Hago un echo para que me muestre el contenido html dentro de TbListView-->


</div>