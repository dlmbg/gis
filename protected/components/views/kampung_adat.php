<?php foreach($dt as $dt_p): ?>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/kampung_adat/detail/<?php echo $dt_p->id_kampung_adat; ?>" title="<?php echo $dt_p->nama_kampung; ?>"><?php echo $dt_p->nama_kampung; ?></a></li>
<?php endforeach; ?>

