<?php
/* @var $this GaleriController */
/* @var $data GaleriModel */
?>

<div class="view">

	<div class="span2">
		<img src="<?php echo Yii::app()->baseUrl."/images/galeri/".$data->gambar; ?>">
		<?php
		$this->widget('bootstrap.widgets.TbButton', array(
			'label'=>$data->judul,
			'htmlOptions'=>array(
				'style'=>'width:100%',
				'onclick'=>'js:bootbox.modal("<img src=\"'.Yii::app()->baseUrl."/images/galeri/".$data->gambar.'\"/>", "'.$data->judul.'");'
			),
		));
		?>
	<br>
	<br>
	<br>
	</div>

</div>