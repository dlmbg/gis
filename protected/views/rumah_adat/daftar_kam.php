<?php
/* @var $this Rumah_adatController */
/* @var $model RumahAdatModel */

$this->breadcrumbs=array(
	'Rumah Adat Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RumahAdatModel', 'url'=>array('index')),
	array('label'=>'Create RumahAdatModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rumah-adat-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Rumah Adat</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rumah-adat-model-grid',
	'dataProvider'=>$model->kampung(Yii::app()->request->getQuery('id')),
	'columns'=>array(
		'id_rumah_adat',
		'KampungAdat.nama_kampung',
		'nama_rumah_adat',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Detail}',
				'buttons'=>array(
					'Detail'=>array('url'=>'$this->grid->controller->createUrl("/rumah_adat/detail/$data->id_rumah_adat")')
				),
		),
	),
)); ?>
