 <div class="row-fluid">
<div class="span12">
<h3>Peta</h3>

	<?php
	Yii::import('ext.gmap.*');
	 
	$gMap = new EGMap();
	$gMap->zoom = 9;
	$gMap->setWidth("100%");
	$gMap->setHeight(600);
	$mapTypeControlOptions = array(
	  'position'=> EGMapControlPosition::LEFT_BOTTOM,
	  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
	);
	 
	$gMap->mapTypeControlOptions= $mapTypeControlOptions;
	 
	$gMap->setCenter(-8.692354,121.25061);
	
	foreach($model as $md)
	{
		$icon = new EGMapMarkerImage(Yii::app()->baseUrl.'/icon/icon.png');
 
		$icon->setSize(32, 37);
		$icon->setAnchor(16, 16.5);
		$icon->setOrigin(0, 0);

		$marker = new EGMapMarker($md['lat'],$md['lang'], array('title' => $md->KampungAdat->nama_kampung,'icon'=>$icon));
		$info_window = new EGMapInfoWindow('<div><b>'.$md->KampungAdat->nama_kampung.'</b><br>Lokasi : '.$md['lokasi'].'<br>'.$md['keterangan'].'</div>');
		$marker->addHtmlInfoWindow($info_window);
		$gMap->addMarker($marker);
	}

	$gMap->renderMap();
	?>
</div>
</div>