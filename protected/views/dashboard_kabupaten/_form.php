<?php
/* @var $this Dashboard_kabupatenController */
/* @var $model KabupatenModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kabupaten-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kabupaten'); ?>
		<?php echo $form->textField($model,'kabupaten',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kabupaten'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->