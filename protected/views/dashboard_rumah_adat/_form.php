<?php
/* @var $this Dashboard_rumah_adatController */
/* @var $model RumahAdatModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rumah-adat-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kampung_adat'); ?>
		<select name="RumahAdatModel[id_kampung_adat]" id="RumahAdatModel_id_kampung_adat">
		<?php
			$this->widget('SelectOpKampungAdat',array('id_select'=>$model->id_kampung_adat));
		?>
		</select>
		<?php echo $form->error($model,'id_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_rumah_adat'); ?>
		<?php echo $form->textField($model,'nama_rumah_adat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_rumah_adat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alamat'); ?>
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