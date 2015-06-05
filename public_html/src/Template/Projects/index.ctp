<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Statuses'), ['controller' => 'ProjectStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Status'), ['controller' => 'ProjectStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Tasks'), ['controller' => 'ProjectTasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Task'), ['controller' => 'ProjectTasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="projects index col-lg-10 col-md-9 columns">
    <table id='projects-table' cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date Created</th>
            <th>Project Status</th>
            <th>Tasks Finished</th>
            <th>Current Hours</th>
            <th>Max Hours</th>
            <th>Quoted Hours</th>

            <th>Due Date</th>
            <th>Quote</th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($projects as $project): ?>
        <tr>
            <td><?= $this->Number->format($project->id) ?></td>
            <td><?= $this->Html->link(__(ucwords($project->name) ), ['action' => 'view', $project->id]) ?></td>
            <td><?= h($project->date_created) ?></td>
            <td>
                <?= $project->has('project_status') ? $this->Html->link($project->project_status->name, ['controller' => 'ProjectStatuses', 'action' => 'view', $project->project_status->id]) : '' ?>
            </td>
            <td>
                <?= $project->getNumberOfTasksDone() . '/' . $project->getNumberOfTasks() ?>
            </td>
            <td><?= $project->getCurrentTime(); ?> hrs </td>
            <td><?= $this->Number->format($project->max_hours) ?> hrs </td>
            <td><?= $this->Number->format($project->quoted_hours) ?> hrs</td>

            <td><?= h($project->getTimeRemaining()) ?></td>
            <td>
                <?= $project->has('quote') ? $this->Html->link($project->quote->name, ['controller' => 'Quotes', 'action' => 'view', $project->quote->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>

    <?php 
    $this->Html->scriptStart(['block' => true]);
        echo "$(document).ready(function() {
            $('#projects-table').DataTable();
        } );";
    $this->Html->scriptEnd();
    ?>