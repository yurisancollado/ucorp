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

<h1><?php echo "Postulante ".$model->nombres." ".$model->apellidos; ?></h1>

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
<div>
	<a onclick="exps()" id="addExp"> Agregar Experiencia </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="exp" style="display:none">
		<?php $this->renderPartial('_exp', array('model'=>$exp,'id'=>$model->id)); ?>
		<a onclick="hide_exps()">Ocultar</a>
	</div>
	<table>
		<thead>
			<tr>
				<th>
					Organizacion
				</th>
				<th>
					Periodo
				</th>
				<th>
					Ultimo Cargo
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($model->experiencias as $experiencia){ ?>
				<tr>
					<td>
					<?php echo $experiencia->organizacion; ?>
					</td>
					<td>
					<?php echo is_null($experiencia->finalizacion)?$experiencia->inicio:$experiencia->inicio." a ".$experiencia->finalizacion; ?>	
					</td>
					<td>
					<?php echo $experiencia->ultimoCargo; ?>	
					</td>
				
				</tr>
		<?php }
		?>
		</tbody>
	</table>	
</div>
<div>
<a onclick="edus()" id="addEdu"> Agregar Educacion </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="edu" style="display:none">
<?php $this->renderPartial('_edu', array('model'=>$edu,'id'=>$model->id)); ?>
<a onclick="hide_edus()">Ocultar</a>
</div>
<table>
		<thead>
			<tr>
				<th>
					Institucion
				</th>
				<th>
					Periodo
				</th>
				<th>
					Titulo
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($model->educaciones as $educacion){ ?>
				<tr>
					<td>
					<?php echo $educacion->institucion; ?>
					</td>
					<td>
					<?php echo is_null($educacion->finalizacion)?$educacion->inicio:$educacion->inicio." a ".$educacion->finalizacion; ?>	
					</td>
					<td>
					<?php echo $educacion->titulo; ?>	
					</td>
				
				</tr>
		<?php }
		?>
		</tbody>
	</table>	

</div>
<div>
<a onclick="cons()" id="addCon"> Agregar Conocimiento </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="con" style="display:none">
<?php $this->renderPartial('_con', array('model'=>$con,'id'=>$model->id)); ?>
<a onclick="hide_cons()">Ocultar</a>
</div>
<table>
		<thead>
			<tr>
				<th>
					Conocimiento
				</th>
				<th>
					Nivel
				</th>
				<th>
					Area
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($model->conocimientos as $conocimiento){ ?>
				<tr>
					<td>
					<?php echo $conocimiento->nombre; ?>
					</td>
					<td>
					<?php echo $conocimiento->nivelText; ?>	
					</td>
					<td>
					<?php echo $conocimiento->areaText; ?>	
					</td>
				
				</tr>
		<?php }
		?>
		</tbody>
	</table>	

</div>
<script>
	function exps(){
		$('#addExp').hide();
		$('#addEdu').show();
		$('#addCon').show();
		$('#exp').show();
		$('#con').hide();
		$('#edu').hide();
		
	}
	function edus(){
		$('#addEdu').hide();
		$('#addExp').show();
		$('#addCon').show();
		$('#edu').show();
		$('#con').hide();
		$('#exp').hide();
	}
	function cons(){
		$('#addCon').hide();
		$('#addExp').show();
		$('#addEdu').show();
		$('#con').show();
		$('#edu').hide();
		$('#exp').hide();
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

<?php
	if(isset($model->usuario))
		echo "Nombre de Usuario: <b>".$model->usuario->nombre."</b>";
	else $this->renderPartial('_usu', array('model'=>$usu,'id'=>$model->id)); 
	
?>


