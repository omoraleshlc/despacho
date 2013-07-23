<?php
/* @var $this ResponsablesController */
/* @var $data Responsables */
?>
<script>
    function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                       Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var left = ((screen.width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((screen.height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
</script>    
    
<div class="view">

	<b>#Expediente</b>
	<?php echo CHtml::link(CHtml::encode($data->keyR), array('view', 'id'=>$data->keyR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreResponsable')); ?>:</b>
	<?php echo CHtml::encode($data->nombreResponsable); ?>
	<br />

<?php 
###NIVEL 1 
/*
$connection=Yii::app()->db;
$sql="select * from responsables where keyR='".CHtml::encode($data->keyR)."'";            
$command=$connection->createCommand($sql);
$dataReader=$command->query();
while(($row=$dataReader->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
    
//echo $row1['nombre1'].' '.$row1['nombre2'].' '.$row1['nombre3'].' '.$row1['apellido1'].' '.$row1['apellido2'].' '.$row1['apellido3'];
    //echo $row["nombre1"];
  }
 */ 
?>        
        
        
 <a href="index.php?r=dependientes&keyR=<?php echo CHtml::encode($data->keyR);?>&responsable=<?php echo CHtml::encode($data->nombreResponsable);?>" >
Dependientes (+)</a>
    
        
 <div class="view">

	

	

<?php 
###NIVEL 1 

$connection=Yii::app()->db;
$sql="select * from dependientes where keyR='".CHtml::encode($data->keyR)."'";            
$command=$connection->createCommand($sql);
$dataReader=$command->query();
while(($row=$dataReader->read())!==false) {  
   
    //print $row['nombre'];
print '- '.$row['nombre'].' '.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].' '.$row['apellido3'];
    //echo $row["nombre1"];
print '<br>';
echo $this->abrirVentana(CHtml::encode($data->keyR));
  }
 


?>        
   <?php 
   
   ?>
     <?php //echo CHtml::encode($dataReader->dependiente);
     //echo CHtml::encode($this->cargarDependientes("ovidio"));
     ?>
        



 
<a href="#" id="fancybox-trigger" onClick="PopupCenter('/despacho/protected/views/responsables/vDependientes.php?keyR=<?php echo CHtml::encode($data->keyR);?>','xtf','900','500');" >Agregar Dependientes</a>
</div> 
        
 <?php
/*
 $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogIntro',
    'options'=>array(
        'title'=>'Intro',
        'autoOpen'=>true,
        'modal'=>true,
        'width'=>550,
        'height'=>470,
    ),
));
//<iframe value="0" style="width: 100%;" title="response" class="iframeDialog" id="iframeshowIntroDialog" frameborder="0" scrolling="no" src="/dependientes/index"></iframe>
echo CHtml::link('dependientes', '#', array('class'=>'css_genre_class')); 
        Yii::app()->clientScript->registerScript('dependientess', ""."$('css_genre_class').click(function(){".
                "$('#ajaxgenre_view').toggle();".
"});".
"");    */  ?></b>
        
      

 
   
</div>



    
