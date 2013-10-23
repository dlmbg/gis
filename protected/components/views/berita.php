<?php foreach($dt as $dt_p): ?>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/berita/detail/<?php echo $dt_p->id_berita; ?>" title="<?php echo $dt_p->judul; ?>"><?php echo $dt_p->judul; ?></a></li>
<?php endforeach; ?>

