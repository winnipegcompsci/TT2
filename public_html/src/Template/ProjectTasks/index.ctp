<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Project Task'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="projectTasks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('project_id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('body') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('deadline') ?></th>
            <th><?= $this->Paginator->sort('done') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($projectTasks as $projectTask): ?>
        <tr>
            <td><?= $this->Number->format($projectTask->id) ?></td>
            <td>
                <?= $projectTask->has('project') ? $this->Html->link($projectTask->project->name, ['controller' => 'Projects', 'action' => 'view', $projectTask->project->id]) : '' ?>
            </td>
            <td><?= h($projectTask->title) ?></td>
            <td><?= h($projectTask->body) ?></td>
            <td>
                <?= $projectTask->has('user') ? $this->Html->link($projectTask->user->id, ['controller' => 'Users', 'action' => 'view', $projectTask->user->id]) : '' ?>
            </td>
            <td><?= h($projectTask->deadline) ?></td>
            <td><?= $this->Number->format($projectTask->done) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $projectTask->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectTask->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTask->id)]) ?>
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
