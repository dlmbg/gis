<?php
/* @var $this Dashboard_petaController */
/* @var $data PetaModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_peta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_peta), array('view', 'id'=>$data->id_peta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kampung_adat')); ?>:</b>
	<?php echo CHtml::encode($data->id_kampung_adat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />


</div>