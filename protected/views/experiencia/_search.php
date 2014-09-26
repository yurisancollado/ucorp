<?php
/* @var $this ExperienciaController */
/* @var $model Experiencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'organizacion'); ?>
		<?php echo $form->textField($model,'organizacion',array('size'=>60,'maxlength'=>450)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finalizacion'); ?>
		<?php echo $form->textField($model,'finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ultimoCargo'); ?>
		<?php echo $form->textField($model,'ultimoCargo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'persona_id'); ?>
		<?php echo $form->textField($model,'persona_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->