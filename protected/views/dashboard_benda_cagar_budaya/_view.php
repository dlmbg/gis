<?php
/* @var $this Dashboard_benda_cagar_budayaController */
/* @var $data BendaCagarBudayaModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_benda_cagar_budaya')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_benda_cagar_budaya), array('view', 'id'=>$data->id_benda_cagar_budaya)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kampung_adat')); ?>:</b>
	<?php echo CHtml::encode($data->id_kampung_adat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_benda_cagar_budaya')); ?>:</b>
	<?php echo CHtml::encode($data->nama_benda_cagar_budaya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat')); ?>:</b>
	<?php echo CHtml::encode($data->tempat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>