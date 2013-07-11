
<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lecciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lecciones),array('view','id'=>$data->id_lecciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_temas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_temas),array('view','id'=>$data->id_temas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_lecciones')); ?>:</b>
	<?php echo CHtml::encode($data->nb_lecciones); ?>
	<br />


</div>
