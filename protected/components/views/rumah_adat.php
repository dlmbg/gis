<?php foreach($dt as $dt_p): ?>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/rumah_adat/detail/<?php echo $dt_p->id_rumah_adat; ?>" title="<?php echo $dt_p->nama_rumah_adat; ?>"><?php echo $dt_p->nama_rumah_adat; ?></a></li>
<?php endforeach; ?>

