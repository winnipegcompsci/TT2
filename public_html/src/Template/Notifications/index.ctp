<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Notification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="notifications index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('message') ?></th>
            <th><?= $this->Paginator->sort('notification_type_id') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th><?= $this->Paginator->sort('user_role_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($notifications as $notification): ?>
        <tr>
            <td><?= $this->Number->format($notification->id) ?></td>
            <td><?= h($notification->message) ?></td>
            <td>
                <?= $notification->has('notification_type') ? $this->Html->link($notification->notification_type->name, ['controller' => 'NotificationTypes', 'action' => 'view', $notification->notification_type->id]) : '' ?>
            </td>
            <td><?= h($notification->date_created) ?></td>
            <td>
                <?= $notification->has('user_role') ? $this->Html->link($notification->user_role->name, ['controller' => 'UserRoles', 'action' => 'view', $notification->user_role->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $notification->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notification->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id)]) ?>
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
