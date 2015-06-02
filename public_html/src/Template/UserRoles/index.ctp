<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notifications'), ['controller' => 'Notifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notification'), ['controller' => 'Notifications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userRoles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('order') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userRoles as $userRole): ?>
        <tr>
            <td><?= $this->Number->format($userRole->id) ?></td>
            <td><?= h($userRole->name) ?></td>
            <td><?= $this->Number->format($userRole->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userRole->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRole->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->id)]) ?>
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
