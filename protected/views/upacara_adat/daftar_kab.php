<?php
/* @var $this Upacara_adatController */
/* @var $model UpacaraAdatModel */

$this->breadcrumbs=array(
	'Upacara Adat Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UpacaraAdatModel', 'url'=>array('index')),
	array('label'=>'Create UpacaraAdatModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#upacara-adat-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Upacara Adat</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'upacara-adat-model-grid',
	'dataProvider'=>$model->kabupaten(Yii::app()->request->getQuery('id')),
	'columns'=>array(
		'id_upacara_adat',
		'KampungAdat.nama_kampung',
		'nama_upacara_adat',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Detail}',
				'buttons'=>array(
					'Detail'=>array('url'=>'$this->grid->controller->createUrl("/upacara_adat/detail/$data->id_upacara_adat")')
				),
		),
	),
)); ?>
