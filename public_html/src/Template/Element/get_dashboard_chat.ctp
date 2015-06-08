<?php 
use Cake\ORM\TableRegistry;

$users = TableRegistry::get('Users')->find('all', [
    'conditions' => ['disabled' => FALSE ],
]);

$messages = TableRegistry::get('Messages')->find('all', [   
    'conditions' => [
        'OR' => [
            ['to_user_id' => $user_id], 
            ['to_user_id' => -1]
        ]
    ],    
    'contain' => ['Users'],
    'order' => ['Messages.id' => 'asc'],
]);
?>

<div class="box box-success box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Chat</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
       
        <div class="row">
            <div class="columns col-lg-3">
                <ul class="chat list-unstyled">
                <?php 
                
                foreach($users as $user):  
                    if($user->is_online) { 
                        $className = "bg-green";
                    } else {
                        $className = "bg-red";
                    }                   
                    
                ?>
                    <li> 
                        <?= $user->getFullName() ?>
                        
                        <span class="label pull-right <?= $className ?>">
                        
                        <div class="dropdown">
                          <button class="btn btn-xs dropdown-toggle <?= $className ?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-cog"></i>
                          </button> 
                          
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a data-toggle="modal" data-target="#sendMessageModal" role="menuitem" href="#">Private Message</a></li>
                            <li role="presentation"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'profile', $user->id]) ?>">View Profile</a></li>
                          </ul>
                        </div>
                                                
                        </span>
                    </li>
                    <br />
                <?php endforeach; ?>
                </ul>
            </div>
            
            
            <div class="columns col-lg-9" style="border-left: 1px solid #333">
                 <?php foreach ($messages as $message): ?>
                    <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font"><?= $message->getSenderName() ?></strong> <small class="pull-right text-muted">
                                <span class="glyphicon glyphicon-time"></span><?= $message->timestamp; ?></small>
                            </div>
                            <p>
                                <?= $message->text ?>
                            </p>
                    </div>
                <?php endforeach; ?>    
                <form action="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'chat']) ?>" method="post">
                    <div class="input-group">
                      <input type="text" name="text" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-success btn-flat">Send</button>
                      </span>
                    </div>
                </form>   
            </div>
        </div>
    </div><!-- /.box-body -->
</div>


