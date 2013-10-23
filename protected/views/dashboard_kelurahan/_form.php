<?php
/* @var $this Dashboard_kelurahanController */
/* @var $model KelurahanModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kelurahan-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kecamatan'); ?>
		<select name="KelurahanModel[id_kecamatan]" id="KelurahanModel_id_kecamatan">
		<?php
			$this->widget('SelectOpKecamatan',array('id_select'=>$model->id_kecamatan));
		?>
		</select>
		<?php echo $form->error($model,'id_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelurahan'); ?>
		<?php echo $form->textField($model,'kelurahan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kelurahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->