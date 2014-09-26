<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'Update Educacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Educacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>View Educacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institucion',
		'inicio',
		'finalizacion',
		'titulo',
		'persona_id',
	),
)); ?>
