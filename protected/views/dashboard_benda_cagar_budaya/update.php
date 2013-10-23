<?php
/* @var $this Dashboard_benda_cagar_budayaController */
/* @var $model BendaCagarBudayaModel */

$this->breadcrumbs=array(
	'Benda Cagar Budaya Models'=>array('index'),
	$model->id_benda_cagar_budaya=>array('view','id'=>$model->id_benda_cagar_budaya),
	'Update',
);

$this->menu=array(
	array('label'=>'List BendaCagarBudayaModel', 'url'=>array('index')),
	array('label'=>'Create BendaCagarBudayaModel', 'url'=>array('create')),
	array('label'=>'View BendaCagarBudayaModel', 'url'=>array('view', 'id'=>$model->id_benda_cagar_budaya)),
	array('label'=>'Manage BendaCagarBudayaModel', 'url'=>array('admin')),
);
?>

<h1>Update BendaCagarBudayaModel <?php echo $model->id_benda_cagar_budaya; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>