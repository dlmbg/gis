<?php
/* @var $this Buku_tamuController */
/* @var $model BukuTamuModel */
/* @var $form CActiveForm */
?>

<div class="alert alert-info">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buku-tamu-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="alert alert-success">
		<?php echo $form->textField($model,'nama',array('placeholder'=>'nama','size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="alert alert-success">
		<?php echo $form->textField($model,'asal',array('placeholder'=>'asal','size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'asal'); ?>
	</div>

	<div class="alert alert-success">
		<?php echo $form->textField($model,'email',array('placeholder'=>'email','size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="alert alert-success">
		<?php echo $form->textArea($model,'pesan',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'pesan'); ?>
	</div>

	<div class="alert alert-success	">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class'=>'btn btn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->