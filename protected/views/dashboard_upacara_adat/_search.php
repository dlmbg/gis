<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $model UpacaraAdatModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_upacara_adat'); ?>
		<?php echo $form->textField($model,'id_upacara_adat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kampung_adat'); ?>
		<?php echo $form->textField($model,'id_kampung_adat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_upacara_adat'); ?>
		<?php echo $form->textField($model,'nama_upacara_adat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->