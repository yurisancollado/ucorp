<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>
	<h3>Datos de Usuario</h3>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraseña'); ?>
		<?php echo CHtml::passwordField('contrasena','',array('size'=>45,'maxlength'=>45)); ?>
		
	</div>
	<div class="row">
		<?php echo "<span><b>Contraseña (repetir)</b><span class='required'>*</span></span><br/>"; ?>
		<?php echo CHtml::passwordField('contrasena2','',array('size'=>45,'maxlength'=>45)); ?>
		<br/><span style="display:none" id="errorContrasena"><small>Debes colocar contraseñas de 6 o mas caracteres e iguales en ambos campos</small></span>
	</div>

	

	

	<?php echo $form->hiddenField($model,'persona_id',array('value'=>$id)); ?>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id'=>'go','disabled'=>true)); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<script>
	 $('body').on('input','#contrasena2', function() { 
	 
	 		if($(this).val()==$('#contrasena').val()&&$(this).val().length>5){
	 			$('#go').attr('disabled',false);
	 			$('#errorContrasena').hide();
	 		}
	 			
	 		else{
	 			$('#go').attr('disabled',false);
	 			$('#errorContrasena').show();
	 		}
	 			
	 			
	 	});
	
	
</script><!-- form -->