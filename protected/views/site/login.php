<h3>Log In</h3>

<div class="alert alert-info">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="alert alert-success">
		<?php echo $form->textField($model,'username',array('placeholder'=>'username','size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="alert alert-success">
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'password','size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="alert alert-success">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="alert alert-success">
		<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-danger')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
