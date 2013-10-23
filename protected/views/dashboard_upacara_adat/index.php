<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Upacara Adat Models',
);

$this->menu=array(
	array('label'=>'Create UpacaraAdatModel', 'url'=>array('create')),
	array('label'=>'Manage UpacaraAdatModel', 'url'=>array('admin')),
);
?>

<h1>Upacara Adat Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
