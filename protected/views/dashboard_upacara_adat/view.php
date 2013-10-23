<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $model UpacaraAdatModel */

$this->breadcrumbs=array(
	'Upacara Adat Models'=>array('index'),
	$model->id_upacara_adat,
);

$this->menu=array(
	array('label'=>'List UpacaraAdatModel', 'url'=>array('index')),
	array('label'=>'Create UpacaraAdatModel', 'url'=>array('create')),
	array('label'=>'Update UpacaraAdatModel', 'url'=>array('update', 'id'=>$model->id_upacara_adat)),
	array('label'=>'Delete UpacaraAdatModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_upacara_adat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UpacaraAdatModel', 'url'=>array('admin')),
);
?>

<h1>View UpacaraAdatModel #<?php echo $model->id_upacara_adat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_upacara_adat',
		'id_kampung_adat',
		'nama_upacara_adat',
		'tempat',
		'keterangan',
	),
)); ?>
