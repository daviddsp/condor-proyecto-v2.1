<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fuente_referencias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_fuente_referencias),array('view','id'=>$data->id_fuente_referencias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuente_referencias')); ?>:</b>
	<?php echo CHtml::encode($data->fuente_referencias); ?>
	<br />


</div>