<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $data UpacaraAdatModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_upacara_adat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_upacara_adat), array('view', 'id'=>$data->id_upacara_adat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kampung_adat')); ?>:</b>
	<?php echo CHtml::encode($data->id_kampung_adat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_upacara_adat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_upacara_adat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat')); ?>:</b>
	<?php echo CHtml::encode($data->tempat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>