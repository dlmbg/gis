<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $model UpacaraAdatModel */

$this->breadcrumbs=array(
	'Upacara Adat Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UpacaraAdatModel', 'url'=>array('index')),
	array('label'=>'Manage UpacaraAdatModel', 'url'=>array('admin')),
);
?>

<h1>Create UpacaraAdatModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>