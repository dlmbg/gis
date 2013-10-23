<?php
/* @var $this Dashboard_benda_cagar_budayaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Benda Cagar Budaya Models',
);

$this->menu=array(
	array('label'=>'Create BendaCagarBudayaModel', 'url'=>array('create')),
	array('label'=>'Manage BendaCagarBudayaModel', 'url'=>array('admin')),
);
?>

<h1>Benda Cagar Budaya Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
