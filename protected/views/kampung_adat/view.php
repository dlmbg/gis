<?php
/* @var $this Kampung_adatController */
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

<h3>Kampung Adat</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kampung_adat',
		'Kelurahan.kelurahan',
		'nama_kampung',
		'alamat',
	),
)); ?>
