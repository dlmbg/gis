<?php
/* @var $this Dashboard_petaController */
/* @var $model PetaModel */

$this->breadcrumbs=array(
	'Peta Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PetaModel', 'url'=>array('index')),
	array('label'=>'Manage PetaModel', 'url'=>array('admin')),
);
?>

<h1>Create PetaModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>