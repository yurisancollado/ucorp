<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'View Educacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>Update Educacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>