<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
        
        
<?php if(Yii::app()->user->name=='admin'){   ?>
        
        
<div class="breadcrumb">
  <span class="left"></span>
    <ul>
      <li><a href="/home">Home</a></li>
      <li><a href="/products">Products</a></li>
      <li><a href="/menus">Menus</a></li>
      <li><a href="catalogo.php" class="active">Catalogo</a></li>
</ul>
  <span class="right"></span>
  
  
</div>        
        
        
        
        
        
        
        <div id="mainmenu">
		<?php 
             
 $this->widget('application.extensions.mbmenu.MbMenu',array(
 'items'=>array(

 array('label'=>'Catalogos',
 'items'=>array(
 array('label'=>'Responsable', 'url'=>array('/responsables/index','view'=>'index')),
     array('label'=>'Dependientes', 'url'=>array('/dependientes/index','view'=>'index')),
 array('label'=>'Asuntos', 'url'=>array('/asuntos/index','view'=>'index')),
      array('label'=>'Caja', 'url'=>array('/catCaja/index','view'=>'index'))
 ),
     array('label'=>'Caja',
 'items'=>array(
 array('label'=>'Apertura Caja', 'url'=>array('/responsables/index','view'=>'index')),
 array('label'=>'Cierre Caja', 'url'=>array('/asuntos/index','view'=>'index')),
      array('label'=>'Caja', 'url'=>array('/catCaja/index','view'=>'index'))
 ),
          ),
 ),
 ),
 ));
                
 
 ?>
	</div><!-- mainmenu -->
 <?php }?>       
        
        
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Despacho Jurídico.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
