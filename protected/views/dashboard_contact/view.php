<?php
/* @var $this Dashboard_contactController */
/* @var $model ContactModel */

$this->breadcrumbs=array(
	'Contact Models'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ContactModel', 'url'=>array('index')),
	array('label'=>'Update ContactModel', 'url'=>array('update', 'id'=>$model->id_contact)),
	array('label'=>'Delete ContactModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contact),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactModel', 'url'=>array('admin')),
);
?>

<h1>View ContactModel #<?php echo $model->id_contact; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contact',
		'name',
		'email',
		'subject',
		'body',
		'tanggal',
	),
)); ?>
