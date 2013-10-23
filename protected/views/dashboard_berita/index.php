<?php
/* @var $this Dashboard_beritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Berita Models',
);

$this->menu=array(
	array('label'=>'Create BeritaModel', 'url'=>array('create')),
	array('label'=>'Manage BeritaModel', 'url'=>array('admin')),
);
?>

<h1>Berita Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
