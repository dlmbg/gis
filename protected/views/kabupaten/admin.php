<?php
/* @var $this KabupatenController */
/* @var $model KabupatenModel */

$this->breadcrumbs=array(
	'Kabupaten Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List KabupatenModel', 'url'=>array('index')),
	array('label'=>'Create KabupatenModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kabupaten-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Kabupaten</h3>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kabupaten-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_kabupaten',
		'kabupaten',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Rumah Adat}',
				'buttons'=>array(
					'Rumah Adat'=>array('url'=>'$this->grid->controller->createUrl("/rumah_adat/daftar_kab/$data->id_kabupaten")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Upacara Adat}',
				'buttons'=>array(
					'Upacara Adat'=>array('url'=>'$this->grid->controller->createUrl("/upacara_adat/daftar_kab/$data->id_kabupaten")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Benda Cagar Budaya}',
				'buttons'=>array(
					'Benda Cagar Budaya'=>array('url'=>'$this->grid->controller->createUrl("/benda_cagar_budaya/daftar_kab/$data->id_kabupaten")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Kampung Adat}',
				'buttons'=>array(
					'Kampung Adat'=>array('url'=>'$this->grid->controller->createUrl("/kampung_adat/daftar_kab/$data->id_kabupaten")')
				),
		),
	),
)); ?>
