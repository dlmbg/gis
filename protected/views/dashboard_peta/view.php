<?php
/* @var $this Dashboard_petaController */
/* @var $model PetaModel */

$this->breadcrumbs=array(
	'Peta Models'=>array('index'),
	$model->id_peta,
);

$this->menu=array(
	array('label'=>'List PetaModel', 'url'=>array('index')),
	array('label'=>'Create PetaModel', 'url'=>array('create')),
	array('label'=>'Update PetaModel', 'url'=>array('update', 'id'=>$model->id_peta)),
	array('label'=>'Delete PetaModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_peta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PetaModel', 'url'=>array('admin')),
);
?>

<h1>View PetaModel #<?php echo $model->id_peta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_peta',
		'id_kampung_adat',
		'lokasi',
		'keterangan',
		'lat',
		'lang',
	),
)); ?>
