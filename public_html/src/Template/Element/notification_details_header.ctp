<?php 
use Cake\Network\Http\Client;


// Eventually will pull RSS from the WTCR Site
// Notifications Include;
    // New Vendor Products 
    // Product Pushed to WTCR
    
    
$rssFeedURL = "http://slashdot.org/slashdot.xml";

$http = new Client();
$xml = $http->get($rssFeedURL)->body;

$xmlData = simplexml_load_string($xml);

$numNotifications = count($xmlData);

?>

<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-bell-o"></i>
  <span class="label label-warning"><?= $numNotifications ?></span>
</a>
<ul class="dropdown-menu">
  <li class="header">You have <?= $numNotifications ?> notifications</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <ul class="menu">
      <?php foreach($xmlData as $data) : ?>
      <li>
        <a target="blank" href="<?= $data->url ?>">
          <i class="fa fa-users text-aqua"></i> <?= $data->title ?>
        </a>
        <!--
        <a href="#">
          <i class="fa fa-users text-aqua"></i> 6 new members joined today
        </a>
        -->
      </li>
      <?php endforeach; ?>
    </ul>
  </li>
  <li class="footer"><a href="#">View all</a></li>
</ul>
</li>