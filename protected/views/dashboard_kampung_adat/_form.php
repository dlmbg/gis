<?php
/* @var $this Dashboard_kampung_adatController */
/* @var $model KampungAdatModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kampung-adat-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kelurahan'); ?>
		<select name="KampungAdatModel[id_kelurahan]" id="KampungAdatModel_id_kecamatan">
		<?php
			$this->widget('SelectOpKelurahan',array('id_select'=>$model->id_kelurahan));
		?>
		</select>
		<?php echo $form->error($model,'id_kelurahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kampung'); ?>
		<?php echo $form->textField($model,'nama_kampung',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_kampung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->