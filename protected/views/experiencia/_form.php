<?php
/* @var $this ExperienciaController */
/* @var $model Experiencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'organizacion'); ?>
		<?php echo $form->textField($model,'organizacion',array('size'=>60,'maxlength'=>450)); ?>
		<?php echo $form->error($model,'organizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finalizacion'); ?>
		<?php echo $form->textField($model,'finalizacion'); ?>
		<?php echo $form->error($model,'finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimoCargo'); ?>
		<?php echo $form->textField($model,'ultimoCargo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ultimoCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persona_id'); ?>
		<?php echo $form->textField($model,'persona_id'); ?>
		<?php echo $form->error($model,'persona_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->