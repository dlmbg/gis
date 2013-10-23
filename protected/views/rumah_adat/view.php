<?php
/* @var $this Rumah_adatController */
/* @var $model RumahAdatModel */

$this->breadcrumbs=array(
	'Rumah Adat Models'=>array('index'),
	$model->id_rumah_adat,
);

$this->menu=array(
	array('label'=>'List RumahAdatModel', 'url'=>array('index')),
	array('label'=>'Create RumahAdatModel', 'url'=>array('create')),
	array('label'=>'Update RumahAdatModel', 'url'=>array('update', 'id'=>$model->id_rumah_adat)),
	array('label'=>'Delete RumahAdatModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rumah_adat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RumahAdatModel', 'url'=>array('admin')),
);
?>

<h3>Rumah Adat</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rumah_adat',
		'KampungAdat.nama_kampung',
		'nama_rumah_adat',
		'alamat',
		'keterangan',
	),
)); ?>
