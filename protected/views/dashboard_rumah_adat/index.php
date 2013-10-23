<?php
/* @var $this Dashboard_rumah_adatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rumah Adat Models',
);

$this->menu=array(
	array('label'=>'Create RumahAdatModel', 'url'=>array('create')),
	array('label'=>'Manage RumahAdatModel', 'url'=>array('admin')),
);
?>

<h1>Rumah Adat Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
