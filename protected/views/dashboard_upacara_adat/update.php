<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $model UpacaraAdatModel */

$this->breadcrumbs=array(
	'Upacara Adat Models'=>array('index'),
	$model->id_upacara_adat=>array('view','id'=>$model->id_upacara_adat),
	'Update',
);

$this->menu=array(
	array('label'=>'List UpacaraAdatModel', 'url'=>array('index')),
	array('label'=>'Create UpacaraAdatModel', 'url'=>array('create')),
	array('label'=>'View UpacaraAdatModel', 'url'=>array('view', 'id'=>$model->id_upacara_adat)),
	array('label'=>'Manage UpacaraAdatModel', 'url'=>array('admin')),
);
?>

<h1>Update UpacaraAdatModel <?php echo $model->id_upacara_adat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>