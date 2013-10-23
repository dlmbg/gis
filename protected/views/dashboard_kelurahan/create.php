<?php
/* @var $this Dashboard_kelurahanController */
/* @var $model KelurahanModel */

$this->breadcrumbs=array(
	'Kelurahan Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KelurahanModel', 'url'=>array('index')),
	array('label'=>'Manage KelurahanModel', 'url'=>array('admin')),
);
?>

<h1>Create KelurahanModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>