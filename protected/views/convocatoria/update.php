<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
	array('label'=>'View Convocatoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>Update Convocatoria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>