<?php
/* @var $this Dashboard_kecamatanController */
/* @var $model KecamatanModel */

$this->breadcrumbs=array(
	'Kecamatan Models'=>array('index'),
	$model->id_kecamatan=>array('view','id'=>$model->id_kecamatan),
	'Update',
);

$this->menu=array(
	array('label'=>'List KecamatanModel', 'url'=>array('index')),
	array('label'=>'Create KecamatanModel', 'url'=>array('create')),
	array('label'=>'View KecamatanModel', 'url'=>array('view', 'id'=>$model->id_kecamatan)),
	array('label'=>'Manage KecamatanModel', 'url'=>array('admin')),
);
?>

<h1>Update KecamatanModel <?php echo $model->id_kecamatan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>