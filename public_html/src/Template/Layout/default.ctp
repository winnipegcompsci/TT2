<?php
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;

$logged_in = TableRegistry::get('Users')->findById($logged_in_id)->first();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> TT2 || <?= $this->request->params['controller'] . '-' . ucwords($this->request->params['action'] != 'display' ? $this->request->params['action'] : Inflector::humanize($this->request->pass[0]))  ?> </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <!-- Morris Charts -->
    <?= $this->Html->css('plugins/morris/morris.css') ?>
  
    <!-- Bootstrap 3.3.4 -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    
    <!-- Theme Style --> 
    <?= $this->Html->css('AdminLTE.min.css') ?>
    
    <!-- AdminLTE Skins. -->
    <?=  $this->Html->css('skins/skin-blue.css') ?>

    <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css') ?>
    <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?> 
  </head>
    
  
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'enigma_dashboard']); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>TT</b>v2</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Trouble Tickets </b>v2.0</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <?= 
                $this->element('message_details_header', ['logged_in_id' => $logged_in_id]); 
              ?>
              <!-- Notifications: style can be found in dropdown.less -->
              <?= 
                $this->element('notification_details_header');
              ?>
              <!-- Tasks: style can be found in dropdown.less -->
              <?= 
                $this->element('ticket_details_header', [
                    'this_user' => $logged_in
                ]); 
              ?>
                            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= $this->Url->build('/img/users/' . $logged_in['picture']); ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?= $logged_in['first_name'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?= $this->Url->build('/img/users/' . $logged_in['picture']); ?>" class="img-circle" alt="User Image" />
                    <p>
                        
                      <?= $logged_in['first_name'] . ' ' . $logged_in['last_name'] ?> - <?= $logged_in ? $logged_in->getUserRole()->name : '' ?>
                      <small>Member since <?= date("D, M j, Y", strtotime($logged_in['user_created'])); ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Projects</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Messages</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Tickets</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'view', $logged_in->id]); ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= $this->Url->build('/img/users/' . $logged_in['picture']); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?= $logged_in['first_name'] . ' ' . $logged_in['last_name'] ?></p>

              <a href="#">
                <?php 
                    if($logged_in && $logged_in->isOnline()) {
                        ?>
                        <i class="fa fa-circle text-success"></i> Online
                        <?php
                    } else {
                        ?>
                        <i class="fa fa-circle text-danger"></i> Offline
                        <?php 
                    }
                ?>
                </a>
            </div>
          </div>
          <!-- search form -->
          <form action="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'search']); ?>" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">ENIGMA NETWORKS</li>
            <li class="treeview">
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'enigma_dashboard']); ?>">
                    <i class="fa fa-dashboard text-aqua"></i> <span>Enigma Dashboard</span> 
                </a>
            </li>    
            <li>
             <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>">
                <i class="fa fa-list-ol text-aqua"></i> <span>Projects</span> <small class="label pull-right bg-yellow"><?= $num_open_projects ?></small></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> View Projects</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'add']); ?>"><i class="fa fa-circle-o text-aqua"></i> Create Project</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'index']); ?>">
                <i class="fa fa-support text-aqua"></i> <span>Tickets</span> <small class="label pull-right bg-red"><?= $num_open_tickets ?></small></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> View Tickets</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'add']); ?>"><i class="fa fa-circle-o text-aqua"></i> Create Ticket</a></li>
              </ul>
            </li>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'calendar']); ?>">
                    <i class="fa fa-calendar text-aqua"></i> <span>Calendar</span> 
                </a>
            </li>    
            
            <li class="treeview">
              <a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'index']); ?>">
                <i class="fa fa-envelope text-aqua"></i> <span>Messages</span></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'inbox']); ?>"><i class="fa fa-circle-o"></i> Inbox </a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'add']); ?>"><i class="fa fa-circle-o text-aqua"></i> New Message</a></li>
              </ul>
            </li>
            
            
            
            <li>
              <a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'index']); ?>">
                <i class="fa fa-user text-aqua"></i> <span>Customers</span> 
              </a>
            </li>    
            
            <li>
              <a href="<?= $this->Url->build(['controller' => 'Quotes', 'action' => 'index']); ?>">
                <i class="fa fa-usd text-aqua"></i> <span>Quotes</span> 
              </a>
            </li>    
            
            <li>
              <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'asterisk_calls']); ?>">
                <i class="fa fa-asterisk text-aqua"></i> <span>Asterisk Call Logs</span> 
              </a>
            </li>          
            
            <li>
              <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">
                <i class="fa fa-users text-aqua"></i> <span>Users</span> 
              </a>
            </li>

            <li class="treeview">
              <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'reports']); ?>">
                <i class="fa fa-bar-chart text-aqua"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'ticket_report']); ?>"><i class="fa fa-circle-o"></i> Ticket Report</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'billing_report']); ?>"><i class="fa fa-circle-o"></i> Billing Status Report</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'employee_report']); ?>"><i class="fa fa-circle-o"></i> Employee Report</a></li>
              </ul>
            </li>            
            
            <li class="header">WTCR</li>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'wtcr_dashboard']); ?>">
                    <i class="fa fa-dashboard text-green"></i> <span>WTCR Dashboard</span> 
                </a>
            </li>
            <li>
             <a href="<?= $this->Url->build(['controller' => 'Orders', 'action' => 'index']); ?>">
                <i class="fa fa-shopping-cart text-green"></i> <span>Orders</span> <small class="label pull-right bg-yellow">2</small></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> View Orders</a></li>
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Find Order</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'enigma_dashboard']); ?>"><i class="fa fa-circle-o text-aqua"></i> Create New Order</a></li>
              </ul>
            </li>
             <li>
             <a href="<?= $this->Url->build(['controller' => 'Inventory', 'action' => 'index']); ?>">
                <i class="fa fa-barcode text-green"></i> <span>Inventory</span>
              </a>
              <ul class="treeview-menu">               
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> View Inventory</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'find']); ?>"><i class="fa fa-circle-o"></i> Find Item</a></li>
              </ul>
            </li>
            <li>
             <a href="<?= $this->Url->build(['controller' => 'Wtcr_Products', 'action' => 'index']); ?>">
                <i class="fa fa-desktop text-green"></i> <span>WTCR Products</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Wtcr_Products', 'action' => 'index']); ?>"><i class="fa fa-circle-o"></i> View Products</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Wtcr_Products', 'action' => 'add']); ?>"><i class="fa fa-circle-o text-aqua"></i> Create Product</a></li>
              </ul>
            </li>
            <li>
             <a href="<?= $this->Url->build(['controller' => 'Wtcr_vendors', 'action' => 'index']); ?>">
                <i class="fa fa-inbox text-green"></i> <span>Vendors</span> <small class="label pull-right bg-blue">2</small></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Wtcr_Vendors', 'action' => 'index']); ?>"><i class="fa fa-circle-o text-aqua"></i> View Vendors</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Wtcr_Vendor_Products', 'action' => 'add']); ?>"><i class="fa fa-circle-o text-red"></i> <span>New Vendor Products</span></a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'Wtcr_Vendor_Products', 'action' => 'find']); ?>l"><i class="fa fa-circle-o"></i> Find Vendor Product</a></li>
              </ul>
            </li>
                        <li>
             <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>">
                <i class="fa fa-usd text-green"></i> <span>Marketplaces</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Sales</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-green"></i> P.O.S </a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i></i> Listings</a></li>
              </ul>
            </li>
            <li>
             <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>">
                <i class="fa fa-bar-chart text-green"></i> <span>Reports</span>  <i class="fa fa-angle-left pull-right"></i></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Inventory Product</a></li>
              </ul>
            </li>
            <!--
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?= $this->Flash->render() ?>
        <section class="content-header">
          <h1>
            <a href="<?= $this->Url->build(['Controller' => $this->name, 'action' => 'index']) ?>">
            <small>go back to</small>
            <span style="font-size:75%"><?= $this->name ?></span>
            <small>for enigma networks...</small>
            </a>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><?= $this->request->params['controller'] ?></a></li>
            <li class="active"><?= ucwords($this->request->params['action'] != 'display' ? $this->request->params['action'] : Inflector::humanize($this->request->pass[0]))  ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="main">
                <?= $this->fetch('content') ?>
            </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>TT Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2015 <a href="http://www.enigmait.ca">Enigma Networks</a>.</strong> All rights reserved.
      </footer>
      
      <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">                
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3> 
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>               
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>                                    
                </a>
              </li> 
              <li>
                <a href='javascript::;'>               
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>                                    
                </a>
              </li> 
              <li>
                <a href='javascript::;'>               
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-waring pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>                                    
                </a>
              </li> 
              <li>
                <a href='javascript::;'>               
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>                                    
                </a>
              </li>               
            </ul><!-- /.control-sidebar-menu -->         

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">            
            <form method="post">
            
                <h3 class="control-sidebar-heading">Notification Settings</h3>

                    
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Send Customer Emails
                    <input type="checkbox" class="pull-right" />
                    </label> 
                    Sends notification emails when I add an event to a ticket.           
                </div><!-- /.form-group -->
              
                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Show me as online
                    <?php 
                    if($logged_in && $logged_in->isOnline()) {
                        $isChecked = "checked";

                    } else {
                        $isChecked = "";
                    }

                    $url = $this->Url->build([
                        'controller' => 'Users', 
                        'action' => 'toggleOnlineStatus', 
                        $logged_in['id']
                    ]);
                    
                    $onchange = "setChatStatus('" . $url . "')";
                    ?>
                    <input onchange="<?= $onchange ?>" id="togglechat" type="checkbox" class="pull-right" <?= $isChecked ?> />
                    </label>                
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                    Turn off notifications
                    <input type="checkbox" class="pull-right" />
                    </label>                
                </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>                
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->
    

    <!-- jQuery 2.1.4 -->
    <?= $this->Html->script('plugins/jQuery/jQuery-2.1.4.min.js'); ?>    
       
    <?= $this->Html->script('bootstrap.min.js'); ?>

    <!-- SlimScroll -->
    <?= $this->Html->script('plugins/slimScroll/jquery.slimscroll.min.js'); ?>
    
    <!-- Morris Charts -->
    <?= $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'); ?>
    <?= $this->Html->script('plugins/morris/morris.js'); ?>
    
    <!-- FastClick --> 
    <?= $this->Html->script('plugins/fastclick/fastclick.min.js'); ?>
    
    <!-- DataTables -->
    <?= $this->Html->script('//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'); ?>

    <!-- Full Calendar -->
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js'); ?>
    <?= $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js'); ?>

    <!-- Theme JS -->
    <?= $this->Html->script('app.min.js'); ?>
    
    <?= $this->Html->script('pages/sidebar.js'); ?>
    
    <!-- Demo JS --> 
    <?= $this->Html->script('demo.js'); ?>
            
    <?= $this->fetch('script') ?>
  </body>
</html>
