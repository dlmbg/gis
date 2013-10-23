<?php
/* @var $this Dashboard_galeriController */
/* @var $model GaleriModel */

$this->breadcrumbs=array(
	'Galeri Models'=>array('index'),
	$model->id_galeri=>array('view','id'=>$model->id_galeri),
	'Update',
);

$this->menu=array(
	array('label'=>'List GaleriModel', 'url'=>array('index')),
	array('label'=>'Create GaleriModel', 'url'=>array('create')),
	array('label'=>'View GaleriModel', 'url'=>array('view', 'id'=>$model->id_galeri)),
	array('label'=>'Manage GaleriModel', 'url'=>array('admin')),
);
?>

<h1>Update GaleriModel <?php echo $model->id_galeri; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>