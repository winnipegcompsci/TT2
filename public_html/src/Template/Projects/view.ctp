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
    <div class="box box-primary box-solid with-border">
        <div class="box-header"> <h3><?= h($project->name) ?></h3></div>
        
        <div class="box-body">
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
    </div>
        
    <div class="box box-primary box-solid">
        <div class="box-header with-border"> Description</div>
        
        <div class="box-body">
            <?= $project->description ?>
        </div>
    </div>    
        
    <div class="row">
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Project Tasks</h3>
                <span class="pull-right"><?= $project->getNumberOfTasksDone() . '/' . $project->getNumberOfTasks() ?> Tasks Completed</span>
            </div><!-- /.box-header -->
            <div class="box-body">
                <ul class="todo-list">
                <?php foreach ($project->project_tasks as $projectTasks): 
                    if($projectTasks->done) {
                        $liClass = "done bg-green";
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
                      <?php $changeStatusURL = $this->Url->build([
                        'controller' => 'ProjectTasks',
                        'action' => 'toggleProjectTaskDone',
                        $projectTasks->id
                      ]);
                        // debug($changeStatusURL);
                      ?>
                      <input onchange="callCakeFunction('<?= $changeStatusURL ?>')" type="checkbox" <?= $checked ?> value="" name=""/>
                      <!-- todo text -->
                      <span class="text"><?= $projectTasks->title ?></span>
                      <span class="text-center">(Assigned to <?= $projectTasks->getAssignedUserName() ?>)</span>
                      <?php if($project->done) { ?>
                      <!-- Emphasis label -->
                      <small class="label label-warning pull-right"><i class="fa fa-clock-o"></i> DUE: <?= $projectTasks->deadline ?> </small>
                      <?php } else { ?>
                      <small class="label label-danger pull-right"><i class="fa fa-clock-o"></i> DUE: <?= $projectTasks->deadline ?> </small>
                      <?php } ?>
                      
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal_task_<?= $projectTasks->id ?>"><i class="fa fa-info"></i></a>
                        <a class="btn btn-warning btn-xs" href="<?= $this->Url->build(['controller' => 'ProjectTasks', 'action' => 'edit', $projectTasks->id]) ?>"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger btn-xs"  href="<?= $this->Url->build(['controller' => 'ProjectTasks', 'action' => 'edit', $projectTasks->id]) ?>"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </li>
            <?php endforeach; ?>
          </ul>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix no-border">
          <button class="btn btn-default pull-right" data-toggle="modal" data-target="#add_project_task"><i class="fa fa-plus"></i> Add Task</button>
        </div>
        </div><!-- /.box -->
    </div>
</div>

<?php 
foreach ($project->project_tasks as $projectTask):  ?>
<!-- Modal -->

<div id="modal_task_<?= $projectTask->id ?>" class="modal modal-info fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-info"></i> Task:  <?= $projectTask->title ?></h4>
      </div>
      <div class="modal-body">
        <p><?= $projectTask->body ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php 
endforeach;
?>

<div id="add_project_task" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-info"></i> Add New Task</h4>
      </div>
      <div class="modal-body">
        <?php         
            $task = TableRegistry::get('ProjectTasks')->newEntity();
            echo $this->Form->create($task, [
                'url' => ['controller' => 'ProjectTasks', 'action' => 'add_task_to_project', $project->id]
            ]);
            
            echo $this->Form->input('title', [
                'label' => 'Task Title',
                'class' => 'form-control input-lg',
            ]);
            echo $this->Form->input('body', [
                'class' => 'form-control input-lg',
                'placeholder' => 'Task Details',
                'label' => 'Task Details'
            ]);
            echo $this->Form->input('deadline');
             
            ?>
      </div>
      <div class="modal-footer">
            <?= $this->Form->button(__('Add New Task')); ?>
            <?= $this->Form->end(); ?>
      </div>
    </div>

  </div>
</div>


