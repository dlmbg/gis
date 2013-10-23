<?php
/* @var $this Dashboard_petaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peta Models',
);

$this->menu=array(
	array('label'=>'Create PetaModel', 'url'=>array('create')),
	array('label'=>'Manage PetaModel', 'url'=>array('admin')),
);
?>

<h1>Peta Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
