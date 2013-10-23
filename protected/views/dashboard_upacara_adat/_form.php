<?php
/* @var $this Dashboard_upacara_adatController */
/* @var $model UpacaraAdatModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'upacara-adat-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kampung_adat'); ?>
		<select name="UpacaraAdatModel[id_kampung_adat]" id="UpacaraAdatModel_id_kampung_adat">
		<?php
			$this->widget('SelectOpKampungAdat',array('id_select'=>$model->id_kampung_adat));
		?>
		</select>
		<?php echo $form->error($model,'id_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_upacara_adat'); ?>
		<?php echo $form->textField($model,'nama_upacara_adat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_upacara_adat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tempat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->