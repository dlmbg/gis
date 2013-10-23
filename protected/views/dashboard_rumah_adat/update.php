<?php
/* @var $this Dashboard_rumah_adatController */
/* @var $model RumahAdatModel */

$this->breadcrumbs=array(
	'Rumah Adat Models'=>array('index'),
	$model->id_rumah_adat=>array('view','id'=>$model->id_rumah_adat),
	'Update',
);

$this->menu=array(
	array('label'=>'List RumahAdatModel', 'url'=>array('index')),
	array('label'=>'Create RumahAdatModel', 'url'=>array('create')),
	array('label'=>'View RumahAdatModel', 'url'=>array('view', 'id'=>$model->id_rumah_adat)),
	array('label'=>'Manage RumahAdatModel', 'url'=>array('admin')),
);
?>

<h1>Update RumahAdatModel <?php echo $model->id_rumah_adat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>