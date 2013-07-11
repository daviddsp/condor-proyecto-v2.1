<?php
/* @var $this TemasController */
/* @var $model Temas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'temas-Temas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_tema'); ?>
		<?php echo $form->textField($model,'nb_tema'); ?>
		<?php echo $form->error($model,'nb_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_temas'); ?>
		<?php echo $form->textField($model,'des_temas'); ?>
		<?php echo $form->error($model,'des_temas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->