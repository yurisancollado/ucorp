<?php
/* @var $this ExperienciaController */
/* @var $data Experiencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion')); ?>:</b>
	<?php echo CHtml::encode($data->organizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->finalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ultimoCargo')); ?>:</b>
	<?php echo CHtml::encode($data->ultimoCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persona_id')); ?>:</b>
	<?php echo CHtml::encode($data->persona_id); ?>
	<br />


</div>