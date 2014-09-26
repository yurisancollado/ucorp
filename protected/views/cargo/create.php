<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Administrar Cargo', 'url'=>array('admin')),
);
?>

<h1>Crear Cargo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>