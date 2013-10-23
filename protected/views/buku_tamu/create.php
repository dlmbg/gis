<?php
/* @var $this Buku_tamuController */
/* @var $model BukuTamuModel */

$this->breadcrumbs=array(
	'Buku Tamu Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BukuTamuModel', 'url'=>array('index')),
	array('label'=>'Manage BukuTamuModel', 'url'=>array('admin')),
);
?>

<h1>Create BukuTamuModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>