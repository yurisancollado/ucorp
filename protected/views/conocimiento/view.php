<?php
/* @var $this ConocimientoController */
/* @var $model Conocimiento */

$this->breadcrumbs=array(
	'Conocimientos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Conocimiento', 'url'=>array('index')),
	array('label'=>'Create Conocimiento', 'url'=>array('create')),
	array('label'=>'Update Conocimiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Conocimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conocimiento', 'url'=>array('admin')),
);
?>

<h1>View Conocimiento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'nivel',
		'persona_id',
		'area_id',
	),
)); ?>
