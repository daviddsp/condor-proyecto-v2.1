<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lecciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lecciones),array('view','id'=>$data->id_lecciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre del Tema')); ?>:
	<?php echo CHtml::encode($data->temas->nb_temas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_lecciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_lecciones),array('view','id'=>$data->nb_lecciones)); ?>
	<br />


</div>
