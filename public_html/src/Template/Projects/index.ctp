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
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th><?= $this->Paginator->sort('project_status_id') ?></th>
            <th><?= $this->Paginator->sort('max_hours') ?></th>
            <th><?= $this->Paginator->sort('quoted_hours') ?></th>
            <th><?= $this->Paginator->sort('due_date') ?></th>
            <th><?= $this->Paginator->sort('quote_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($projects as $project): ?>
        <tr>
            <td><?= $this->Number->format($project->id) ?></td>
            <td><?= ucwords($project->name) ?></td>
            <td><?= h($project->date_created) ?></td>
            <td>
                <?= $project->has('project_status') ? $this->Html->link($project->project_status->name, ['controller' => 'ProjectStatuses', 'action' => 'view', $project->project_status->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($project->max_hours) ?></td>
            <td><?= $this->Number->format($project->quoted_hours) ?></td>
            <td><?= h($project->due_date) ?></td>
            <td>
                <?= $project->has('quote') ? $this->Html->link($project->quote->name, ['controller' => 'Quotes', 'action' => 'view', $project->quote->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

    <?php 
    $this->Html->scriptStart(['block' => true]);
        echo "$(document).ready(function() {
            $('#projects-table').DataTable();
        } );";
    $this->Html->scriptEnd();
    ?>