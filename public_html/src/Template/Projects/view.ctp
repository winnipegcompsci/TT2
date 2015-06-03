<?php 
use Cake\ORM\TableRegistry;
?>
<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Statuses'), ['controller' => 'ProjectStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Status'), ['controller' => 'ProjectStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Tasks'), ['controller' => 'ProjectTasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Task'), ['controller' => 'ProjectTasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="projects view col-lg-10 col-md-9 columns">
    <h2><?= h($project->name) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Project Status') ?></h6>
            <p><?= $project->has('project_status') ? $this->Html->link($project->project_status->name, ['controller' => 'ProjectStatuses', 'action' => 'view', $project->project_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote') ?></h6>
            <p><?= $project->has('quote') ? $this->Html->link($project->quote->name, ['controller' => 'Quotes', 'action' => 'view', $project->quote->id]) : '' ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($project->id) ?></p>
            <h6 class="subheader"><?= __('Max Hours') ?></h6>
            <p><?= $this->Number->format($project->max_hours) ?></p>
            <h6 class="subheader"><?= __('Quoted Hours') ?></h6>
            <p><?= $this->Number->format($project->quoted_hours) ?></p>
        </div>
        <div class="col-lg-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($project->date_created) ?></p>
            <h6 class="subheader"><?= __('Due Date') ?></h6>
            <p><?= h($project->due_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <?= $this->Text->autoParagraph(h($project->name)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($project->description)) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Project Tasks</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <ul class="todo-list">
                <?php foreach ($project->project_tasks as $projectTasks): 
                    if($projectTasks->done) {
                        $liClass = "done";
                        $checked = "checked";
                    } else {
                        $liClass = "";
                        $checked = "";
                    }
                ?>
                    <li class="<?= $liClass ?>">
                    <!-- drag handle -->
                    <span class="handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                      <input type="checkbox" <?= $checked ?> value="" name=""/>
                      <!-- todo text -->
                      <span class="text"><?= $projectTasks->title ?></span>
                      <span class="text">(Assigned to <?= TableRegistry::get('Users')->findById($projectTasks->user_id)->first()->first_name . 
                        ' ' . TableRegistry::get('Users')->findById($projectTasks->user_id)->first()->last_name .
                        ')'
                         ?></span>
                      <?php if($projectTasks->done) { ?>
                      <!-- Emphasis label -->
                      <small class="label label-success pull-right"><i class="fa fa-clock-o"></i> DUE: <?= $projectTasks->deadline ?> </small>
                      <?php } else { ?>
                      <small class="label label-danger pull-right"><i class="fa fa-clock-o"></i> DUE: <?= $projectTasks->deadline ?> </small>
                      <?php } ?>
                      
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
            <?php endforeach; ?>
          </ul>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix no-border">
          <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add Task</button>
        </div>
        </div><!-- /.box -->
    </div>
</div>

   <?php 
   
    $this->Html->scriptStart(['block' => true]);
    echo '  /* The todo list plugin */
  $(".todo-list").todolist({
    onCheck: function (ele) {
      console.log("The element has been checked")
    },
    onUncheck: function (ele) {
      console.log("The element has been unchecked")
    }
  });';
    
    $this->Html->scriptEnd();
    ?>

