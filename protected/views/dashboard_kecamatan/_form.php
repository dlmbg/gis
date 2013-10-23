<?php
/* @var $this Dashboard_kecamatanController */
/* @var $model KecamatanModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kecamatan-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kabupaten'); ?>
		<select name="KecamatanModel[id_kabupaten]" id="KecamatanModel_id_kabupaten">
		<?php
			$this->widget('SelectOpKabupaten',array('id_select'=>$model->id_kabupaten));
		?>
		</select>
		<?php echo $form->error($model,'id_kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kecamatan'); ?>
		<?php echo $form->textField($model,'nama_kecamatan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_kecamatan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->