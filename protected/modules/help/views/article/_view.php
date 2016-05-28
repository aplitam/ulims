<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

	<?php //echo CHtml::encode($data->title); ?>
	

	<div class="content"><h4><?php 	echo CHtml::link(CHtml::encode($data->title), array("/help/article/content/","view"=>"", "#"=>$data->title)) ; 	echo "<br>";
	?></h4></div>

<div class="content">

	<font color="green">
	<?php echo CHtml::encode($data->link);
		echo "<br>"; ?> </font>

	<?php 
	echo CHtml::encode($data->content); ?>	
	<br /><hr>



</div>

