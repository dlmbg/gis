<?php
/* @var $this Dashboard_kabupatenController */
/* @var $model KabupatenModel */

$this->breadcrumbs=array(
	'Kabupaten Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KabupatenModel', 'url'=>array('index')),
	array('label'=>'Manage KabupatenModel', 'url'=>array('admin')),
);
?>

<h1>Create KabupatenModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>