<?php
/* @var $this Dashboard_kabupatenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kabupaten Models',
);

$this->menu=array(
	array('label'=>'Create KabupatenModel', 'url'=>array('create')),
	array('label'=>'Manage KabupatenModel', 'url'=>array('admin')),
);
?>

<h1>Kabupaten Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
