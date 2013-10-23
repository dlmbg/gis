<?php foreach($dt as $dt_p): ?>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/upacara_adat/detail/<?php echo $dt_p->id_upacara_adat; ?>" title="<?php echo $dt_p->nama_upacara_adat; ?>"><?php echo $dt_p->nama_upacara_adat; ?></a></li>
<?php endforeach; ?>

