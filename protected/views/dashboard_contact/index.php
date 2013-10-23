<?php
/* @var $this Dashboard_contactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contact Models',
);

$this->menu=array(
	array('label'=>'Manage ContactModel', 'url'=>array('admin')),
);
?>

<h1>Contact Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
