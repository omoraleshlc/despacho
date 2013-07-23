<?php

// change the following paths if necessary
$yii='/var/www/yii/framework/yii.php';
$config='/var/www/despacho/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();



?>
 <div class="view">

	

	

<?php 
###NIVEL 1 

$connection=Yii::app()->db;
$sql="select * from dependientes where keyR='".$_GET['keyR']."'";            
$command=$connection->createCommand($sql);
$dataReader=$command->query();
while(($row=$dataReader->read())!==false) {  
   
    //print $row['nombre'];
print '- '.$row['nombre'].' '.$row['nombre1'].' '.$row['nombre2'].' '.$row['apellido1'].' '.$row['apellido2'].' '.$row['apellido3'];
    //echo $row["nombre1"];
print '<br>';
//echo $this->abrirVentana(CHtml::encode($data->keyR));
  }
 


?>        
   <?php 
   
   ?>
     <?php //echo CHtml::encode($dataReader->dependiente);
     //echo CHtml::encode($this->cargarDependientes("ovidio"));
     ?>
        



 

</div> 

