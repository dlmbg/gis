<?php
/* @var $this Rumah_adatController */
/* @var $model RumahAdatModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_rumah_adat'); ?>
		<?php echo $form->textField($model,'id_rumah_adat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_rumah_adat'); ?>
		<?php echo $form->textField($model,'nama_rumah_adat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->