<?php
/* @var $this Dashboard_kelurahanController */
/* @var $model KelurahanModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kelurahan'); ?>
		<?php echo $form->textField($model,'id_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kecamatan'); ?>
		<?php echo $form->textField($model,'id_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kelurahan'); ?>
		<?php echo $form->textField($model,'kelurahan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->