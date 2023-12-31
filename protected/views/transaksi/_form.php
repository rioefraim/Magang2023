<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_transaksi'); ?>
		<?php echo $form->textField($model,'obat_transaksi',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'obat_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_transaksi'); ?>
		<?php echo $form->textField($model,'harga_transaksi'); ?>
		<?php echo $form->error($model,'harga_transaksi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->