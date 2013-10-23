<?php
/* @var $this Benda_cagar_budayaController */
/* @var $model BendaCagarBudayaModel */

$this->breadcrumbs=array(
	'Benda Cagar Budaya Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BendaCagarBudayaModel', 'url'=>array('index')),
	array('label'=>'Create BendaCagarBudayaModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#benda-cagar-budaya-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Benda Cagar Budaya</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'benda-cagar-budaya-model-grid',
	'dataProvider'=>$model->kampung(Yii::app()->request->getQuery('id')),
	'columns'=>array(
		'id_benda_cagar_budaya',
		'KampungAdat.nama_kampung',
		'nama_benda_cagar_budaya',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{Detail}',
				'buttons'=>array(
					'Detail'=>array('url'=>'$this->grid->controller->createUrl("/benda_cagar_budaya/detail/$data->id_benda_cagar_budaya")')
				),
		),
	),
)); ?>
