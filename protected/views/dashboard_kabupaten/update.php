<?php
/* @var $this Dashboard_kabupatenController */
/* @var $model KabupatenModel */

$this->breadcrumbs=array(
	'Kabupaten Models'=>array('index'),
	$model->id_kabupaten=>array('view','id'=>$model->id_kabupaten),
	'Update',
);

$this->menu=array(
	array('label'=>'List KabupatenModel', 'url'=>array('index')),
	array('label'=>'Create KabupatenModel', 'url'=>array('create')),
	array('label'=>'View KabupatenModel', 'url'=>array('view', 'id'=>$model->id_kabupaten)),
	array('label'=>'Manage KabupatenModel', 'url'=>array('admin')),
);
?>

<h1>Update KabupatenModel <?php echo $model->id_kabupaten; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>