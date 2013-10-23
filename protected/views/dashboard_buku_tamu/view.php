<?php
/* @var $this Dashboard_buku_tamuController */
/* @var $model BukuTamuModel */

$this->breadcrumbs=array(
	'Buku Tamu Models'=>array('index'),
	$model->id_buku_tamu,
);

$this->menu=array(
	array('label'=>'List BukuTamuModel', 'url'=>array('index')),
	array('label'=>'Update BukuTamuModel', 'url'=>array('update', 'id'=>$model->id_buku_tamu)),
	array('label'=>'Delete BukuTamuModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_buku_tamu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BukuTamuModel', 'url'=>array('admin')),
);
?>

<h1>View BukuTamuModel #<?php echo $model->id_buku_tamu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_buku_tamu',
		'nama',
		'asal',
		'tanggal',
		'pesan',
		'email',
		'stts',
	),
)); ?>
