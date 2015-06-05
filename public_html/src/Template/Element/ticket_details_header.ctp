<?php 
use Cake\ORM\TableRegistry;

// $this_user 
$tickets = TableRegistry::get('tickets')->find('all', [
    'conditions' => [
        'user_id' => $this_user->id
    ],
    'order' => [
        'completion' => 'ASC'
    ],
    'limit' => 4,
]);

$numTickets = 0;
foreach($tickets as $ticket) {
    $numTickets++;
}

?>

<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <i class="fa fa-support"></i>
  <span class="label label-danger"><?= $numTickets ?></span>
</a>

<ul class="dropdown-menu">
  <li class="header">You have <?= $numTickets ?> tickets assigned to you</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <ul class="menu">
      
      <?php foreach($tickets as $ticket): 
        
        $pclass = "progress-bar-aqua";
        if($ticket->completion < 30) {
            $pclass = "progress-bar-red";
        } else if($ticket->completion >= 30 && $ticket->completion < 65) {
            $pclass = "progress-bar-yellow";
        } else if($ticket->completion >= 75) {
            $pclass = "progress-bar-green";
        }
      ?>
      
          <li><!-- Task item -->
            <a href="<?php $this->Url->build(['Controller' => 'tickets', 'action' => 'view', $ticket->id]) ?>">
              <h3>
                <?= substr($ticket->problem_description, 0, 60) ?>
                <small class="pull-right"><?= $ticket->completion?>%</small>
              </h3>
              <div class="progress xs">
                <div class="progress-bar <?= $pclass ?>" style="width: <?= $ticket->completion ?>%" role="progressbar" aria-valuenow="<?= $ticket->completion ?>" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only"><?= $ticket->completion ?>% Complete</span>
                </div>
              </div>
            </a>
          </li><!-- end task item -->
      <?php endforeach; ?>
    
    </ul>
  </li>
  <li class="footer">
    <a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'index']); ?>">View all tickets</a>
  </li>
</ul>
</li>