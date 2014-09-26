<?php
/* @var $this ConvocatoriaController */
/* @var $data Convocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin')); ?>:</b>
	<?php echo CHtml::encode($data->fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo_id')); ?>:</b>
	<?php echo CHtml::encode($data->cargo_id); ?>
	<br />


</div>