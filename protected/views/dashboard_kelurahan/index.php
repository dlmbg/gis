<?php
/* @var $this Dashboard_kelurahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kelurahan Models',
);

$this->menu=array(
	array('label'=>'Create KelurahanModel', 'url'=>array('create')),
	array('label'=>'Manage KelurahanModel', 'url'=>array('admin')),
);
?>

<h1>Kelurahan Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
