<?php
/* @var $this KelurahanController */
/* @var $model KelurahanModel */

$this->breadcrumbs=array(
	'Kelurahan Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List KelurahanModel', 'url'=>array('index')),
	array('label'=>'Create KelurahanModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kelurahan-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Kelurahan</h3>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kelurahan-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_kelurahan',
		'kelurahan',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Rumah Adat}',
				'buttons'=>array(
					'Rumah Adat'=>array('url'=>'$this->grid->controller->createUrl("/rumah_adat/daftar_kel/$data->id_kelurahan")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Upacara Adat}',
				'buttons'=>array(
					'Upacara Adat'=>array('url'=>'$this->grid->controller->createUrl("/upacara_adat/daftar_kel/$data->id_kelurahan")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Benda Cagar Budaya}',
				'buttons'=>array(
					'Benda Cagar Budaya'=>array('url'=>'$this->grid->controller->createUrl("/benda_cagar_budaya/daftar_kel/$data->id_kelurahan")')
				),
		),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Kampung Adat}',
				'buttons'=>array(
					'Kampung Adat'=>array('url'=>'$this->grid->controller->createUrl("/kampung_adat/daftar_kel/$data->id_kelurahan")')
				),
		),
	),
)); ?>
