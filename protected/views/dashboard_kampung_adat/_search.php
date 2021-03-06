<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $model KampungAdatModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kampung_adat'); ?>
		<?php echo $form->textField($model,'id_kampung_adat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kelurahan'); ?>
		<?php echo $form->textField($model,'id_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kampung'); ?>
		<?php echo $form->textField($model,'nama_kampung',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->