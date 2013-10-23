<?php
/* @var $this Dashboard_kelurahanController */
/* @var $data KelurahanModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelurahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kelurahan), array('view', 'id'=>$data->id_kelurahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelurahan')); ?>:</b>
	<?php echo CHtml::encode($data->kelurahan); ?>
	<br />


</div>