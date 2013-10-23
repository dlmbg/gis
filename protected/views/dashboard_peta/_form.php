<?php
/* @var $this Dashboard_petaController */
/* @var $model PetaModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peta-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="alert alert-info">

		<?php
			Yii::import('ext.gmap.*');
			$gMap = new EGMap();
			$gMap->setWidth(800);
			$gMap->setHeight(550);
			$gMap->zoom = 9;
			$mapTypeControlOptions = array(
			  'position' => EGMapControlPosition::RIGHT_TOP,
			  'style' => EGMap::MAPTYPECONTROL_STYLE_HORIZONTAL_BAR
			);
			 
			$gMap->mapTypeId = EGMap::TYPE_ROADMAP;
			$gMap->mapTypeControlOptions = $mapTypeControlOptions;
			 
			// Preparing InfoWindow with information about our marker.
			$info_window_a = new EGMapInfoWindow("<div class='gmaps-label' style='color: #000;'>Hi! I'm your marker!</div>");
			 
			// Setting up an icon for marker.
			$icon = new EGMapMarkerImage(Yii::app()->baseUrl.'/icon/icon.png');
			 
			$icon->setSize(32, 37);
			$icon->setAnchor(16, 16.5);
			$icon->setOrigin(0, 0);
			 
			// Saving coordinates after user dragged our marker.
			$dragevent = new EGMapEvent('dragend', "function (event) { $('#lat').val(event.latLng.lat());  $('#lang').val(event.latLng.lng());}", false, EGMapEvent::TYPE_EVENT_DEFAULT);
			 
			// If we have already created marker - show it
			if (!empty($model->lat) && !empty($model->lang)) {
			 
			    $marker = new EGMapMarker($model->lat, $model->lang, array('title' => Yii::t('catalog', "Marker"),
			            'icon'=>$icon, 'draggable'=>true), 'marker', array('dragevent'=>$dragevent));
			    $marker->addHtmlInfoWindow($info_window_a);
			    $gMap->addMarker($marker);
			    $gMap->setCenter($model->lat, $model->lang);
			    $gMap->zoom = 8;
			 
			// If we don't have marker in database - make sure user can create one
			} else {
				$gMap->setCenter(-8.692354,121.25061);
			    $gMap->addEvent(new EGMapEvent('click',
			            'function (event) {var marker = new google.maps.Marker({position: event.latLng, map: '.$gMap->getJsName().
			            ', draggable: true, icon: '.$icon->toJs().'}); '.$gMap->getJsName().
			            '.setCenter(event.latLng); var dragevent = '.$dragevent->toJs('marker').
			            '; $.ajax({'.
			              '"type":"POST",'.
			              '"url":"'.$this->createUrl('catalog/savecoords').'",'.
			              '"data":({"lat": event.latLng.lat(), "lng": event.latLng.lng()}),'.
			              '"cache":false,'.
			            '}); }', false, EGMapEvent::TYPE_EVENT_DEFAULT_ONCE));
			}
			$gMap->renderMap(array(), Yii::app()->language);
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kampung_adat'); ?>
		<select name="PetaModel[id_kampung_adat]" id="PetaModel_id_kampung_adat">
		<?php
			$this->widget('SelectOpKampungAdat',array('id_select'=>$model->id_kampung_adat));
		?>
		</select>
		<?php echo $form->error($model,'id_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textField($model,'lokasi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
			<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>"keterangan",
			    'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
			            'attr'=>"keterangan"
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
			            'attr'=>"keterangan"
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
			            'attr'=>"keterangan"
			        )),
			        'imageUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			    ),
			)); ?>
			<?php echo $form->error($model,'keterangan'); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>100,'id'=>'lat')); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>60,'maxlength'=>100,'id'=>'lang')); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->