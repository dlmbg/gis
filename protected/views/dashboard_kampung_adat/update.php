<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $model KampungAdatModel */

$this->breadcrumbs=array(
	'Kampung Adat Models'=>array('index'),
	$model->id_kampung_adat=>array('view','id'=>$model->id_kampung_adat),
	'Update',
);

$this->menu=array(
	array('label'=>'List KampungAdatModel', 'url'=>array('index')),
	array('label'=>'Create KampungAdatModel', 'url'=>array('create')),
	array('label'=>'View KampungAdatModel', 'url'=>array('view', 'id'=>$model->id_kampung_adat)),
	array('label'=>'Manage KampungAdatModel', 'url'=>array('admin')),
);
?>

<h1>Update KampungAdatModel <?php echo $model->id_kampung_adat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>