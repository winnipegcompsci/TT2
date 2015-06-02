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
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related ProjectTasks') ?></h4>
    <?php if (!empty($project->project_tasks)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Body') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Deadline') ?></th>
            <th><?= __('Done') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($project->project_tasks as $projectTasks): ?>
        <tr>
            <td><?= h($projectTasks->id) ?></td>
            <td><?= h($projectTasks->project_id) ?></td>
            <td><?= h($projectTasks->title) ?></td>
            <td><?= h($projectTasks->body) ?></td>
            <td><?= h($projectTasks->user_id) ?></td>
            <td><?= h($projectTasks->deadline) ?></td>
            <td><?= h($projectTasks->done) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ProjectTasks', 'action' => 'view', $projectTasks->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectTasks', 'action' => 'edit', $projectTasks->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectTasks', 'action' => 'delete', $projectTasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTasks->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Tickets') ?></h4>
    <?php if (!empty($project->tickets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Ticket Type Id') ?></th>
            <th><?= __('Service Type Id') ?></th>
            <th><?= __('Ticket Priority Id') ?></th>
            <th><?= __('Problem Description') ?></th>
            <th><?= __('Solution') ?></th>
            <th><?= __('Ticket Status Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Dis') ?></th>
            <th><?= __('Customer Site Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Completion') ?></th>
            <th><?= __('Billing Status Id') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($project->tickets as $tickets): ?>
        <tr>
            <td><?= h($tickets->id) ?></td>
            <td><?= h($tickets->date_created) ?></td>
            <td><?= h($tickets->customer_id) ?></td>
            <td><?= h($tickets->contact_id) ?></td>
            <td><?= h($tickets->ticket_type_id) ?></td>
            <td><?= h($tickets->service_type_id) ?></td>
            <td><?= h($tickets->ticket_priority_id) ?></td>
            <td><?= h($tickets->problem_description) ?></td>
            <td><?= h($tickets->solution) ?></td>
            <td><?= h($tickets->ticket_status_id) ?></td>
            <td><?= h($tickets->user_id) ?></td>
            <td><?= h($tickets->dis) ?></td>
            <td><?= h($tickets->customer_site_id) ?></td>
            <td><?= h($tickets->project_id) ?></td>
            <td><?= h($tickets->completion) ?></td>
            <td><?= h($tickets->billing_status_id) ?></td>
            <td><?= h($tickets->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
