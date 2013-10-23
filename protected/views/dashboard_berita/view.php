<?php
/* @var $this Dashboard_beritaController */
/* @var $model BeritaModel */

$this->breadcrumbs=array(
	'Berita Models'=>array('index'),
	$model->id_berita,
);

$this->menu=array(
	array('label'=>'List BeritaModel', 'url'=>array('index')),
	array('label'=>'Create BeritaModel', 'url'=>array('create')),
	array('label'=>'Update BeritaModel', 'url'=>array('update', 'id'=>$model->id_berita)),
	array('label'=>'Delete BeritaModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_berita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeritaModel', 'url'=>array('admin')),
);
?>

<h1>View BeritaModel #<?php echo $model->id_berita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_berita',
		'tanggal',
		'judul',
		'isi',
	),
)); ?>
