<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Cargo', 'url'=>array('index')),
	array('label'=>'Crear Cargo', 'url'=>array('create')),
	array('label'=>'Ver Cargo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Cargo', 'url'=>array('admin')),
);
?>

<h1>Modificar Cargo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>