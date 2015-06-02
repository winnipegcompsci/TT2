<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Project Status'), ['action' => 'edit', $projectStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project Status'), ['action' => 'delete', $projectStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="projectStatuses view large-10 medium-9 columns">
    <h2><?= h($projectStatus->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($projectStatus->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($projectStatus->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Projects') ?></h4>
    <?php if (!empty($projectStatus->projects)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Project Status Id') ?></th>
            <th><?= __('Max Hours') ?></th>
            <th><?= __('Quoted Hours') ?></th>
            <th><?= __('Due Date') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($projectStatus->projects as $projects): ?>
        <tr>
            <td><?= h($projects->id) ?></td>
            <td><?= h($projects->date_created) ?></td>
            <td><?= h($projects->name) ?></td>
            <td><?= h($projects->description) ?></td>
            <td><?= h($projects->project_status_id) ?></td>
            <td><?= h($projects->max_hours) ?></td>
            <td><?= h($projects->quoted_hours) ?></td>
            <td><?= h($projects->due_date) ?></td>
            <td><?= h($projects->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
