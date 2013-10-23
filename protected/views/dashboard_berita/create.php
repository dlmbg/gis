<?php
/* @var $this Dashboard_beritaController */
/* @var $model BeritaModel */

$this->breadcrumbs=array(
	'Berita Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeritaModel', 'url'=>array('index')),
	array('label'=>'Manage BeritaModel', 'url'=>array('admin')),
);
?>

<h1>Create BeritaModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>