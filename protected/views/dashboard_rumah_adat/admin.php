<?php
/* @var $this Dashboard_rumah_adatController */
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

<h1>Manage Rumah Adat Models</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rumah-adat-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_rumah_adat',
		'KampungAdat.nama_kampung',
		'nama_rumah_adat',
		'alamat',
		'keterangan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
