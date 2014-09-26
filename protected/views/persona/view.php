<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'apellidos',
		'identificacion',
		'nacimiento',
		'email',
	),
)); ?>
<a href="#" onclick="exps()" id="addExp"> Agregar Experiencia </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onclick="edus()" id="addEdu"> Agregar Educacion </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onclick="cons()" id="addCon"> Agregar Conocimiento </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="exp" style="display:none">
<?php $this->renderPartial('_exp', array('model'=>$exp,'id'=>$model->id)); ?>
<a href="#" onclick="hide_exps()">Ocultar</a>
</div>

<div id="edu" style="display:none">
<?php $this->renderPartial('_edu', array('model'=>$edu,'id'=>$model->id)); ?>
<a href="#" onclick="hide_edus()">Ocultar</a>
</div>

<div id="con" style="display:none">
<?php $this->renderPartial('_con', array('model'=>$con,'id'=>$model->id)); ?>
<a href="#" onclick="hide_cons()">Ocultar</a>
</div>
<script>
	function exps(){
		$('#addExp').hide();
		$('#exp').show();
	}
	function edus(){
		$('#addEdu').hide();
		$('#edu').show();
	}
	function cons(){
		$('#addCon').hide();
		$('#con').show();
	}
	function hide_exps(){
		$('#addExp').show();
		$('#exp').hide();
	}
	function hide_edus(){
		$('#addEdu').show();
		$('#edu').hide();
	}
	function hide_cons(){
		$('#addCon').show();
		$('#con').hide();
	}
	
	
</script>
