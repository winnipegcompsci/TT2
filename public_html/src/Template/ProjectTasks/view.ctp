<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Project Task'), ['action' => 'edit', $projectTask->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project Task'), ['action' => 'delete', $projectTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTask->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Tasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Task'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="projectTasks view large-10 medium-9 columns">
    <h2><?= h($projectTask->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Project') ?></h6>
            <p><?= $projectTask->has('project') ? $this->Html->link($projectTask->project->name, ['controller' => 'Projects', 'action' => 'view', $projectTask->project->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($projectTask->title) ?></p>
            <h6 class="subheader"><?= __('Body') ?></h6>
            <p><?= h($projectTask->body) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $projectTask->has('user') ? $this->Html->link($projectTask->user->id, ['controller' => 'Users', 'action' => 'view', $projectTask->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($projectTask->id) ?></p>
            <h6 class="subheader"><?= __('Done') ?></h6>
            <p><?= $this->Number->format($projectTask->done) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Deadline') ?></h6>
            <p><?= h($projectTask->deadline) ?></p>
        </div>
    </div>
</div>
