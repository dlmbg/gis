<?php
/* @var $this KabupatenController */
/* @var $model KabupatenModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kabupaten'); ?>
		<?php echo $form->textField($model,'id_kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kabupaten'); ?>
		<?php echo $form->textField($model,'kabupaten',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->