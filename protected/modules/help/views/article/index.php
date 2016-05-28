<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/help.css" />
</head>

<body>






<?php
/* @var $this CancelledorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles',
);
?>


<div class="browseData">
<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->searchIndex(),
	'itemView'=>'_view',
)); 


?>
</div>













</body>
</html>
