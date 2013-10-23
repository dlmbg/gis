<?php
/* @var $this Dashboard_rumah_adatController */
/* @var $model RumahAdatModel */

$this->breadcrumbs=array(
	'Rumah Adat Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RumahAdatModel', 'url'=>array('index')),
	array('label'=>'Manage RumahAdatModel', 'url'=>array('admin')),
);
?>

<h1>Create RumahAdatModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>