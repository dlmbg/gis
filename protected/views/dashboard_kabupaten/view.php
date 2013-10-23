<?php
/* @var $this Dashboard_kabupatenController */
/* @var $model KabupatenModel */

$this->breadcrumbs=array(
	'Kabupaten Models'=>array('index'),
	$model->id_kabupaten,
);

$this->menu=array(
	array('label'=>'List KabupatenModel', 'url'=>array('index')),
	array('label'=>'Create KabupatenModel', 'url'=>array('create')),
	array('label'=>'Update KabupatenModel', 'url'=>array('update', 'id'=>$model->id_kabupaten)),
	array('label'=>'Delete KabupatenModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kabupaten),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KabupatenModel', 'url'=>array('admin')),
);
?>

<h1>View KabupatenModel #<?php echo $model->id_kabupaten; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kabupaten',
		'kabupaten',
	),
)); ?>
