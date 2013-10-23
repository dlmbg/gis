<?php
/* @var $this Dashboard_rumah_adatController */
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

<h1>View RumahAdatModel #<?php echo $model->id_rumah_adat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rumah_adat',
		'id_kampung_adat',
		'nama_rumah_adat',
		'alamat',
		'keterangan',
	),
)); ?>
