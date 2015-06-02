<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Notifications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="notifications form large-10 medium-9 columns">
    <?= $this->Form->create($notification) ?>
    <fieldset>
        <legend><?= __('Add Notification') ?></legend>
        <?php
            echo $this->Form->input('message');
            echo $this->Form->input('notification_type_id', ['options' => $notificationTypes, 'empty' => true]);
            echo $this->Form->input('date_created');
            echo $this->Form->input('user_role_id', ['options' => $userRoles, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
