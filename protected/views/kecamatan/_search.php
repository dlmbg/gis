<?php
/* @var $this KecamatanController */
/* @var $model KecamatanModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kecamatan'); ?>
		<?php echo $form->textField($model,'id_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kecamatan'); ?>
		<?php echo $form->textField($model,'nama_kecamatan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->