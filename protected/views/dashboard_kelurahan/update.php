<?php
/* @var $this Dashboard_kelurahanController */
/* @var $model KelurahanModel */

$this->breadcrumbs=array(
	'Kelurahan Models'=>array('index'),
	$model->id_kelurahan=>array('view','id'=>$model->id_kelurahan),
	'Update',
);

$this->menu=array(
	array('label'=>'List KelurahanModel', 'url'=>array('index')),
	array('label'=>'Create KelurahanModel', 'url'=>array('create')),
	array('label'=>'View KelurahanModel', 'url'=>array('view', 'id'=>$model->id_kelurahan)),
	array('label'=>'Manage KelurahanModel', 'url'=>array('admin')),
);
?>

<h1>Update KelurahanModel <?php echo $model->id_kelurahan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>