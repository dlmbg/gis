<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $data KampungAdatModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kampung_adat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kampung_adat), array('view', 'id'=>$data->id_kampung_adat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelurahan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kelurahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kampung')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kampung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />


</div>