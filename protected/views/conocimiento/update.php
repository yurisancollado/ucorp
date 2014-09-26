<?php
/* @var $this ConocimientoController */
/* @var $model Conocimiento */

$this->breadcrumbs=array(
	'Conocimientos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conocimiento', 'url'=>array('index')),
	array('label'=>'Create Conocimiento', 'url'=>array('create')),
	array('label'=>'View Conocimiento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Conocimiento', 'url'=>array('admin')),
);
?>

<h1>Update Conocimiento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>