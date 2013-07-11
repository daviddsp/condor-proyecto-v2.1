<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_temas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_temas),array('view','id'=>$data->id_temas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_temas')); ?>:</b>
	<?php echo CHtml::encode($data->nb_temas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_temas')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_temas); ?>
	<br />


</div>
