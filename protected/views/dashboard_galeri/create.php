<?php
/* @var $this Dashboard_galeriController */
/* @var $model GaleriModel */

$this->breadcrumbs=array(
	'Galeri Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GaleriModel', 'url'=>array('index')),
	array('label'=>'Manage GaleriModel', 'url'=>array('admin')),
);
?>

<h1>Create GaleriModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>