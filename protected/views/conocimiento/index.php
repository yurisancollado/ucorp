<?php
/* @var $this ConocimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conocimientos',
);

$this->menu=array(
	array('label'=>'Create Conocimiento', 'url'=>array('create')),
	array('label'=>'Manage Conocimiento', 'url'=>array('admin')),
);
?>

<h1>Conocimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
