<?php foreach($dt as $dt_p): ?>
	<li><a href="<?php echo Yii::app()->baseUrl; ?>/benda_cagar_budaya/detail/<?php echo $dt_p->id_benda_cagar_budaya; ?>" title="<?php echo $dt_p->nama_benda_cagar_budaya; ?>"><?php echo $dt_p->nama_benda_cagar_budaya; ?></a></li>
<?php endforeach; ?>

