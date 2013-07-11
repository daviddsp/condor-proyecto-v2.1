<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ejercicios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ejercicios),array('view','id'=>$data->id_ejercicios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->nb_ejercicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->des_ejercicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cont_ejercicios')); ?>:</b>
	<?php echo CHtml::encode($data->cont_ejercicios); ?>
	<br />


</div>