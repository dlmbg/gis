<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kampung Adat Models',
);

$this->menu=array(
	array('label'=>'Create KampungAdatModel', 'url'=>array('create')),
	array('label'=>'Manage KampungAdatModel', 'url'=>array('admin')),
);
?>

<h1>Kampung Adat Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
