<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>Create Convocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>