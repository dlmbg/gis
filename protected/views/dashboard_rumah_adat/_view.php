<?php
/* @var $this Dashboard_rumah_adatController */
/* @var $data RumahAdatModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rumah_adat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rumah_adat), array('view', 'id'=>$data->id_rumah_adat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kampung_adat')); ?>:</b>
	<?php echo CHtml::encode($data->id_kampung_adat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_rumah_adat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_rumah_adat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>