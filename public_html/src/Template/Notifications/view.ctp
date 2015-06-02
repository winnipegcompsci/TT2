<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Notification'), ['action' => 'edit', $notification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notification'), ['action' => 'delete', $notification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="notifications view large-10 medium-9 columns">
    <h2><?= h($notification->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Message') ?></h6>
            <p><?= h($notification->message) ?></p>
            <h6 class="subheader"><?= __('Notification Type') ?></h6>
            <p><?= $notification->has('notification_type') ? $this->Html->link($notification->notification_type->name, ['controller' => 'NotificationTypes', 'action' => 'view', $notification->notification_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User Role') ?></h6>
            <p><?= $notification->has('user_role') ? $this->Html->link($notification->user_role->name, ['controller' => 'UserRoles', 'action' => 'view', $notification->user_role->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($notification->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($notification->date_created) ?></p>
        </div>
    </div>
</div>
