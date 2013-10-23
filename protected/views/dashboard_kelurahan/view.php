<?php
/* @var $this Dashboard_kelurahanController */
/* @var $model KelurahanModel */

$this->breadcrumbs=array(
	'Kelurahan Models'=>array('index'),
	$model->id_kelurahan,
);

$this->menu=array(
	array('label'=>'List KelurahanModel', 'url'=>array('index')),
	array('label'=>'Create KelurahanModel', 'url'=>array('create')),
	array('label'=>'Update KelurahanModel', 'url'=>array('update', 'id'=>$model->id_kelurahan)),
	array('label'=>'Delete KelurahanModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kelurahan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KelurahanModel', 'url'=>array('admin')),
);
?>

<h1>View KelurahanModel #<?php echo $model->id_kelurahan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kelurahan',
		'id_kecamatan',
		'kelurahan',
	),
)); ?>
