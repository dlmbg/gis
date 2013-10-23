<?php
/* @var $this Dashboard_kecamatanController */
/* @var $model KecamatanModel */

$this->breadcrumbs=array(
	'Kecamatan Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KecamatanModel', 'url'=>array('index')),
	array('label'=>'Manage KecamatanModel', 'url'=>array('admin')),
);
?>

<h1>Create KecamatanModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>