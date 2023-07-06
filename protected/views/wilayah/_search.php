<?php
/* @var $this WilayahController */
/* @var $model Wilayah */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_wilayah'); ?>
		<?php echo $form->textField($model,'id_wilayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_wilayah'); ?>
		<?php echo $form->textField($model,'nama_wilayah',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kabupaten_wilayah'); ?>
		<?php echo $form->textField($model,'kabupaten_wilayah',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinsi_wilayah'); ?>
		<?php echo $form->textField($model,'provinsi_wilayah',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->