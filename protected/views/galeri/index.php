<?php
/* @var $this GaleriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galeri Models',
);

$this->menu=array(
	array('label'=>'Create GaleriModel', 'url'=>array('create')),
	array('label'=>'Manage GaleriModel', 'url'=>array('admin')),
);
?>

<h1>Galeri Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'template'=>'{pager}<br /><br />{items}',
)); ?>
