<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Notification Type'), ['action' => 'edit', $notificationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notification Type'), ['action' => 'delete', $notificationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notification Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notifications'), ['controller' => 'Notifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification'), ['controller' => 'Notifications', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="notificationTypes view large-10 medium-9 columns">
    <h2><?= h($notificationType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($notificationType->name) ?></p>
            <h6 class="subheader"><?= __('Icon') ?></h6>
            <p><?= h($notificationType->icon) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($notificationType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Notifications') ?></h4>
    <?php if (!empty($notificationType->notifications)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Message') ?></th>
            <th><?= __('Notification Type Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('User Role Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($notificationType->notifications as $notifications): ?>
        <tr>
            <td><?= h($notifications->id) ?></td>
            <td><?= h($notifications->message) ?></td>
            <td><?= h($notifications->notification_type_id) ?></td>
            <td><?= h($notifications->date_created) ?></td>
            <td><?= h($notifications->user_role_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Notifications', 'action' => 'view', $notifications->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Notifications', 'action' => 'edit', $notifications->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notifications', 'action' => 'delete', $notifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notifications->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
