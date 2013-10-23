<?php
/* @var $this Dashboard_buku_tamuController */
/* @var $model BukuTamuModel */

$this->breadcrumbs=array(
	'Buku Tamu Models'=>array('index'),
	$model->id_buku_tamu=>array('view','id'=>$model->id_buku_tamu),
	'Update',
);

$this->menu=array(
	array('label'=>'List BukuTamuModel', 'url'=>array('index')),
	array('label'=>'View BukuTamuModel', 'url'=>array('view', 'id'=>$model->id_buku_tamu)),
	array('label'=>'Manage BukuTamuModel', 'url'=>array('admin')),
);
?>

<h1>Update BukuTamuModel <?php echo $model->id_buku_tamu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>