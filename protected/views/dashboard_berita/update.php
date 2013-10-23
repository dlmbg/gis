<?php
/* @var $this Dashboard_beritaController */
/* @var $model BeritaModel */

$this->breadcrumbs=array(
	'Berita Models'=>array('index'),
	$model->id_berita=>array('view','id'=>$model->id_berita),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeritaModel', 'url'=>array('index')),
	array('label'=>'Create BeritaModel', 'url'=>array('create')),
	array('label'=>'View BeritaModel', 'url'=>array('view', 'id'=>$model->id_berita)),
	array('label'=>'Manage BeritaModel', 'url'=>array('admin')),
);
?>

<h1>Update BeritaModel <?php echo $model->id_berita; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>