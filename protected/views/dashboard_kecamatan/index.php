<?php
/* @var $this Dashboard_kecamatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kecamatan Models',
);

$this->menu=array(
	array('label'=>'Create KecamatanModel', 'url'=>array('create')),
	array('label'=>'Manage KecamatanModel', 'url'=>array('admin')),
);
?>

<h1>Kecamatan Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
