<?php
use Cake\Utility\Inflector;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> TTv2.0 || <?= ucwords($this->request->params['action'] != 'display' ? $this->request->params['action'] : Inflector::humanize($this->request->pass[0]))  ?> </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <!-- Bootstrap 3.3.4 -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    
    <!-- Theme Style --> 
    <?= $this->Html->css('AdminLTE.min.css') ?>
    
    <!-- AdminLTE Skins. -->
    <?=  $this->Html->css('skins/skin-blue.css') ?>
    


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

  
  </head>
    
  
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?= $this->Flash->render(); ?>
        <?= $this->fetch('content') ?>
    </div>
    

    <!-- jQuery 2.1.4 -->
    <?= $this->Html->script('plugins/jQuery/jQuery-2.1.4.min.js'); ?>    
       
    <!-- SlimScroll -->
    <?= $this->Html->script('plugins/slimScroll/jquery.slimscroll.min.js'); ?>
    
    <!-- FastClick --> 
    <?= $this->Html->script('plugins/fastclick/fastclick.min.js'); ?>
    
    <!-- Theme JS -->
    <?= $this->Html->script('app.min.js'); ?>
    
    <!-- Demo JS --> 
    <?= $this->Html->script('demo.js'); ?>
   
    <?= $this->Html->script('bootstrap.min.js'); ?>
    
    <?= $this->Html->script('pages/dashboard2.js'); ?>
    
    <?= $this->fetch('script') ?>
  </body>
</html>
