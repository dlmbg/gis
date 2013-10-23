<?php
/* @var $this Dashboard_contactController */
/* @var $model ContactModel */

$this->breadcrumbs=array(
	'Contact Models'=>array('index'),
	$model->name=>array('view','id'=>$model->id_contact),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactModel', 'url'=>array('index')),
	array('label'=>'View ContactModel', 'url'=>array('view', 'id'=>$model->id_contact)),
	array('label'=>'Manage ContactModel', 'url'=>array('admin')),
);
?>

<h1>Update ContactModel <?php echo $model->id_contact; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>