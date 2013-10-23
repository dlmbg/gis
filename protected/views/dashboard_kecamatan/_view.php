<?php
/* @var $this Dashboard_kecamatanController */
/* @var $data KecamatanModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kecamatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kecamatan), array('view', 'id'=>$data->id_kecamatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kabupaten')); ?>:</b>
	<?php echo CHtml::encode($data->id_kabupaten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kecamatan); ?>
	<br />


</div>