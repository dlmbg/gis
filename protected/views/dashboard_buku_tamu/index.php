<?php
/* @var $this Dashboard_buku_tamuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buku Tamu Models',
);

$this->menu=array(
	array('label'=>'Manage BukuTamuModel', 'url'=>array('admin')),
);
?>

<h1>Buku Tamu Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
