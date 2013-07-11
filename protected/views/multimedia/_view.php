<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_multimedia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_multimedia),array('view','id'=>$data->id_multimedia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_multimedia')); ?>:</b>
	<?php echo CHtml::encode($data->url_multimedia); ?>
	<br />


</div>