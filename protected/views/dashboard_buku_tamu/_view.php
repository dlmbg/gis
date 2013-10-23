<?php
/* @var $this Dashboard_buku_tamuController */
/* @var $data BukuTamuModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_buku_tamu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_buku_tamu), array('view', 'id'=>$data->id_buku_tamu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asal')); ?>:</b>
	<?php echo CHtml::encode($data->asal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesan')); ?>:</b>
	<?php echo CHtml::encode($data->pesan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stts')); ?>:</b>
	<?php echo CHtml::encode($data->stts); ?>
	<br />


</div>