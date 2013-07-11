<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejemplos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ejemplos),array('view','id'=>$data->id_ejemplos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_ejemplos')); ?>:</b>
	<?php echo CHtml::encode($data->nb_ejemplos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cont_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->cont_ejercicios); ?>
	<br />


</div>