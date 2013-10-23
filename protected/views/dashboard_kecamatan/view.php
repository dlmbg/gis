<?php
/* @var $this Dashboard_kecamatanController */
/* @var $model KecamatanModel */

$this->breadcrumbs=array(
	'Kecamatan Models'=>array('index'),
	$model->id_kecamatan,
);

$this->menu=array(
	array('label'=>'List KecamatanModel', 'url'=>array('index')),
	array('label'=>'Create KecamatanModel', 'url'=>array('create')),
	array('label'=>'Update KecamatanModel', 'url'=>array('update', 'id'=>$model->id_kecamatan)),
	array('label'=>'Delete KecamatanModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kecamatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KecamatanModel', 'url'=>array('admin')),
);
?>

<h1>View KecamatanModel #<?php echo $model->id_kecamatan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kecamatan',
		'id_kabupaten',
		'nama_kecamatan',
	),
)); ?>
