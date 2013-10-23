<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $model KampungAdatModel */

$this->breadcrumbs=array(
	'Kampung Adat Models'=>array('index'),
	$model->id_kampung_adat,
);

$this->menu=array(
	array('label'=>'List KampungAdatModel', 'url'=>array('index')),
	array('label'=>'Create KampungAdatModel', 'url'=>array('create')),
	array('label'=>'Update KampungAdatModel', 'url'=>array('update', 'id'=>$model->id_kampung_adat)),
	array('label'=>'Delete KampungAdatModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kampung_adat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KampungAdatModel', 'url'=>array('admin')),
);
?>

<h1>View KampungAdatModel #<?php echo $model->id_kampung_adat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kampung_adat',
		'id_kelurahan',
		'nama_kampung',
		'alamat',
	),
)); ?>
