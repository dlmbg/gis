<?php
/* @var $this Dashboard_kabupatenController */
/* @var $data KabupatenModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kabupaten')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kabupaten), array('view', 'id'=>$data->id_kabupaten)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kabupaten')); ?>:</b>
	<?php echo CHtml::encode($data->kabupaten); ?>
	<br />


</div>