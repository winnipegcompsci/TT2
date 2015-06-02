<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projectTask->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projectTask->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Project Tasks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="projectTasks form large-10 medium-9 columns">
    <?= $this->Form->create($projectTask) ?>
    <fieldset>
        <legend><?= __('Edit Project Task') ?></legend>
        <?php
            echo $this->Form->input('project_id', ['options' => $projects, 'empty' => true]);
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('deadline');
            echo $this->Form->input('done');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
