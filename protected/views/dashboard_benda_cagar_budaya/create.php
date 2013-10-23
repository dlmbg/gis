<?php
/* @var $this Dashboard_benda_cagar_budayaController */
/* @var $model BendaCagarBudayaModel */

$this->breadcrumbs=array(
	'Benda Cagar Budaya Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BendaCagarBudayaModel', 'url'=>array('index')),
	array('label'=>'Manage BendaCagarBudayaModel', 'url'=>array('admin')),
);
?>

<h1>Create BendaCagarBudayaModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>