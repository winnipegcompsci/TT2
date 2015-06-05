<?php
use Cake\ORM\TableRegistry;

$logged_in = TableRegistry::get('Users')->findById($logged_in_id)->first();
if($logged_in) {
    $messages = $logged_in->getMessages();
?>

<li class="dropdown messages-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-envelope-o"></i>
  <span class="label label-success"><?= $logged_in->getMessages()->count(); ?></span>
</a>
<ul class="dropdown-menu">
  <li class="header">You have <?= $logged_in->getMessages()->count();?> messages</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <ul class="menu">
      <?php 
        foreach($messages as $message) {
            $from = TableRegistry::get('Users')->findById($message->from_user_id)->first();
            $text = substr($message->text, 0, 60);
            $time = $message->timestamp;
            
            ?>
            <li><!-- start message -->
                <a href="#">
                <div class="pull-left">
                    <img src="<?= $this->Url->build('/img/users/avatar04.png'); ?>" class="img-circle" alt="User Image"/>
                </div>
                <h4>
                    <?= $from->getFullName() ?>
                    <small><i class="fa fa-clock-o"></i> <?= $time ?></small>
                </h4>
                <p><?= $text ?></p>
                </a>
            </li><!-- end message -->
            
            <?
        }
      ?>
      

    </ul>
  </li>
  <li class="footer"><a href="#">See All Messages</a></li>
</ul>
</li>
<?php 
}
?>

