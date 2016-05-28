


<?php
/* @var $this ArticleController */
/* @var $model Article */
/*
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Manage',
);*/
/*
$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Create Article', 'url'=>array('create')),
);
*/
// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$('#article-grid').yiiGridView('update', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
?>

<div align="center" class="browse"><br><br><br><br>
<h1>Search Topics</h1><br>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>




<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogContact',
    'options'=>array(
        'title'=>'Contact Us',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>100),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>350,
        'height'=>470,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape'=>true,
        'underline'=>false,
    ),
));?> 


<?php $this->renderPartial('_contact',array(
  'model'=>$contact,
)); ?>
  
<?php $this->endWidget(); ?>


<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogFaqs',
    'options'=>array(
        'title'=>'Frequently Asked Questions',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>100),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>600,
        'height'=>500,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape'=>true,
        'underline'=>false,
    ),
));?> 


<?php $this->renderPartial('_faqs',array(
  'model'=>$contact,
)); ?>
  
<?php $this->endWidget(); ?>





<div class="navi">
<hr>
	<?php  

                              echo CHtml::link('BROWSE', '/ulims/help/article/admin/') ; 


                              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                              echo CHtml::link('HELP', array("/help/article/content/","view"=>"", "#"=>'gs')) ;  

                              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                              echo CHtml::link('FAQS', "",  // the link for open the dialog
                                  array(
                                      'style'=>'cursor: pointer; text-decoration: none;',
                                      'onclick'=>"$('#dialogFaqs').dialog('open');",
                                      //'class'=>'btn btn-success'

                                      )); 

 		                              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";



                              
                              echo CHtml::link('CONTACT US', "",  // the link for open the dialog
                                  array(
                                      'style'=>'cursor: pointer; text-decoration: none;',
                                      'onclick'=>"$('#dialogContact').dialog('open');",

                                      //'class'=>'btn btn-success'

                                      )); 

    ?>   <hr>

</div>






<div class="browseData">
<br><br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
    'itemView'=>'_view',
    'id'=>'blogslistview',       // must have id corresponding to js above

)); 
?>
</div>



