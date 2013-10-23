<?php
/* @var $this Dashboard_galeriController */
/* @var $model GaleriModel */

$this->breadcrumbs=array(
	'Galeri Models'=>array('index'),
	$model->id_galeri,
);

$this->menu=array(
	array('label'=>'List GaleriModel', 'url'=>array('index')),
	array('label'=>'Create GaleriModel', 'url'=>array('create')),
	array('label'=>'Update GaleriModel', 'url'=>array('update', 'id'=>$model->id_galeri)),
	array('label'=>'Delete GaleriModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_galeri),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GaleriModel', 'url'=>array('admin')),
);
?>

<h1>View GaleriModel #<?php echo $model->id_galeri; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_galeri',
		'judul',
		'gambar',
	),
)); ?>
