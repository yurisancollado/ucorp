<?php
/* @var $this ConocimientoController */
/* @var $model Conocimiento */

$this->breadcrumbs=array(
	'Conocimientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conocimiento', 'url'=>array('index')),
	array('label'=>'Manage Conocimiento', 'url'=>array('admin')),
);
?>

<h1>Create Conocimiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>