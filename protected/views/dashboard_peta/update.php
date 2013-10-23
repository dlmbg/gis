<?php
/* @var $this Dashboard_petaController */
/* @var $model PetaModel */

$this->breadcrumbs=array(
	'Peta Models'=>array('index'),
	$model->id_peta=>array('view','id'=>$model->id_peta),
	'Update',
);

$this->menu=array(
	array('label'=>'List PetaModel', 'url'=>array('index')),
	array('label'=>'Create PetaModel', 'url'=>array('create')),
	array('label'=>'View PetaModel', 'url'=>array('view', 'id'=>$model->id_peta)),
	array('label'=>'Manage PetaModel', 'url'=>array('admin')),
);
?>

<h1>Update PetaModel <?php echo $model->id_peta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>