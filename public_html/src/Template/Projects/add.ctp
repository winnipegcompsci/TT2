<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
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
<div class="projects form large-10 medium-9 columns">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Add Project') ?></legend>
        <?php
            echo $this->Form->input('date_created');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('project_status_id', ['options' => $projectStatuses]);
            echo $this->Form->input('max_hours');
            echo $this->Form->input('quoted_hours');
            echo $this->Form->input('due_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('quote_id', ['options' => $quotes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
