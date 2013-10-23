<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $model KampungAdatModel */

$this->breadcrumbs=array(
	'Kampung Adat Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KampungAdatModel', 'url'=>array('index')),
	array('label'=>'Manage KampungAdatModel', 'url'=>array('admin')),
);
?>

<h1>Create KampungAdatModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>