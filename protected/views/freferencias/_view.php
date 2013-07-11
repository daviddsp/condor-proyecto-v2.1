<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_freferencias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_freferencias),array('view','id'=>$data->id_freferencias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_freferencias')); ?>:</b>
	<?php echo CHtml::encode($data->nb_freferencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fr_freferencias')); ?>:</b>
	<?php echo CHtml::encode($data->fr_freferencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_leccion); ?>
	<br />


</div>