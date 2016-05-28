<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200, 'class'=>'searchTextField',  'value'=>$_POST["key"])); ?>

<?php $this->endWidget(); ?>

