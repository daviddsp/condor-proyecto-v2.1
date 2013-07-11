<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'horizontalForm',
'type'=>'vertical',
	'id'=>'contenidos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownList($model,'id_lecciones', CHtml::listData(Lecciones::model()->findAll(), 'id_lecciones', 'nb_lecciones'),array('prompt'=>'Seleccione la Lección','class'=>'span5'));?><br />
	
	<?php echo $form->dropDownList($model,'id_ejemplos', CHtml::listData(Ejemplos::model()->findAll(), 'id_ejemplos', 'nb_ejemplos'),array('prompt'=>'Seleccione el ejemplo','class'=>'span5')); ?> <br />

	<?php echo $form->dropDownList($model,'id_ejercicios', CHtml::listData(Ejercicios::model()->findAll(), 'id_ejercicios', 'nb_ejercicios'),array('prompt'=>'Seleccione su ejercicio','class'=>'span5'));?> <br />

	<?php echo $form->dropDownList($model,'id_fuente_referencias', CHtml::listData(Fuentes::model()->findAll(), 'id_fuente_referencias', 'fuente_referencias'),array('prompt'=>'Seleccione su fuente de referencia','class'=>'span5'));?><br />
	
	<?php echo $form->dropDownList($model,'id_multimedia', CHtml::listData(Multimedia::model()->findAll(), 'id_multimedia', 'url_multimedia'),array('prompt'=>'Seleccione su archivo multimedia','class'=>'span5')); ?><br /> 

	<?#php echo $form->textAreaRow($model,'descrip_contenidos',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->ckEditorRow($model, 'descrip_contenidos', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'120')));?>	
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
