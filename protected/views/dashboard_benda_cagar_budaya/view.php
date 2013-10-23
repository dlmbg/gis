<?php
/* @var $this Dashboard_benda_cagar_budayaController */
/* @var $model BendaCagarBudayaModel */

$this->breadcrumbs=array(
	'Benda Cagar Budaya Models'=>array('index'),
	$model->id_benda_cagar_budaya,
);

$this->menu=array(
	array('label'=>'List BendaCagarBudayaModel', 'url'=>array('index')),
	array('label'=>'Create BendaCagarBudayaModel', 'url'=>array('create')),
	array('label'=>'Update BendaCagarBudayaModel', 'url'=>array('update', 'id'=>$model->id_benda_cagar_budaya)),
	array('label'=>'Delete BendaCagarBudayaModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_benda_cagar_budaya),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BendaCagarBudayaModel', 'url'=>array('admin')),
);
?>

<h1>View BendaCagarBudayaModel #<?php echo $model->id_benda_cagar_budaya; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_benda_cagar_budaya',
		'id_kampung_adat',
		'nama_benda_cagar_budaya',
		'tempat',
		'keterangan',
	),
)); ?>
