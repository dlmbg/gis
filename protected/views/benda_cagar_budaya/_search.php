<?php
/* @var $this Benda_cagar_budayaController */
/* @var $model BendaCagarBudayaModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_benda_cagar_budaya'); ?>
		<?php echo $form->textField($model,'id_benda_cagar_budaya'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_benda_cagar_budaya'); ?>
		<?php echo $form->textField($model,'nama_benda_cagar_budaya',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->