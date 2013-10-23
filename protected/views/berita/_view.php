<?php
/* @var $this BeritaController */
/* @var $data BeritaModel */
?>

<div class="alert alert-info">

	<div class="alert alert-success">
		<?php echo CHtml::encode($data->tanggal); ?>
		<h4><a href="<?php echo Yii::app()->baseUrl; ?>/berita/detail/<?php echo $data->id_berita; ?>"><?php echo CHtml::encode($data->judul); ?></a></h4>
	</div>

	
	<?php echo CHtml::encode(substr(strip_tags($data->isi),0,150)); ?>...
	


</div>