<?php
/* @var $this Dashboard_galeriController */
/* @var $data GaleriModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_galeri')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_galeri), array('view', 'id'=>$data->id_galeri)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />


</div>