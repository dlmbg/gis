<?php
/* @var $this Kampung_adatController */
/* @var $model KampungAdatModel */

$this->breadcrumbs=array(
	'Kampung Adat Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List KampungAdatModel', 'url'=>array('index')),
	array('label'=>'Create KampungAdatModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kampung-adat-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3> Kampung Adat</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kampung-adat-model-grid',
	'dataProvider'=>$model->kelurahan(Yii::app()->request->getQuery('id')),
	'columns'=>array(
		'id_kampung_adat',
		'Kelurahan.kelurahan',
		'nama_kampung',
		'alamat',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Rumah Adat}',
				'buttons'=>array(
					'Rumah Adat'=>array('url'=>'$this->grid->controller->createUrl("/rumah_adat/daftar_kam/$data->id_kampung_adat")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Upacara Adat}',
				'buttons'=>array(
					'Upacara Adat'=>array('url'=>'$this->grid->controller->createUrl("/upacara_adat/daftar_kam/$data->id_kampung_adat")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Benda Cagar Budaya}',
				'buttons'=>array(
					'Benda Cagar Budaya'=>array('url'=>'$this->grid->controller->createUrl("/benda_cagar_budaya/daftar_kam/$data->id_kampung_adat")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Kampung Adat}',
				'buttons'=>array(
					'Kampung Adat'=>array('url'=>'$this->grid->controller->createUrl("/kampung_adat/daftar_kam/$data->id_kampung_adat")')
				),
		),
	),
)); ?>
