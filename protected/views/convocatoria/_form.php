<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'method'=>'post',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
		)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'inicio',
				'language'=>'es',
				'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide',
				),
			)
		);?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fin'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'fin',
				'language'=>'es',
				'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide',
				),
			)
		);?>
		<?php echo $form->error($model,'fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('size'=>60,'maxlength'=>450)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo_id'); ?>
		<?php echo $form->dropDownList($model,'cargo_id', CHtml::listData(Cargo::model()->findAll(),'id','nombre'), array('empty' => 'Elige una opción')); ?>
		<?php echo $form->error($model,'cargo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->