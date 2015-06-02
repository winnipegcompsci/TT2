<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Role'), ['action' => 'edit', $userRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Role'), ['action' => 'delete', $userRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notifications'), ['controller' => 'Notifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification'), ['controller' => 'Notifications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userRoles view large-10 medium-9 columns">
    <h2><?= h($userRole->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($userRole->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userRole->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($userRole->order) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Notifications') ?></h4>
    <?php if (!empty($userRole->notifications)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Message') ?></th>
            <th><?= __('Notification Type Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('User Role Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($userRole->notifications as $notifications): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($userRole->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Secretkey') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('User Role Id') ?></th>
            <th><?= __('Disabled') ?></th>
            <th><?= __('User Created') ?></th>
            <th><?= __('Session') ?></th>
            <th><?= __('Cookie') ?></th>
            <th><?= __('Ip') ?></th>
            <th><?= __('Last Login') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Company Name') ?></th>
            <th><?= __('Is Online') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($userRole->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->secretkey) ?></td>
            <td><?= h($users->first_name) ?></td>
            <td><?= h($users->last_name) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->user_role_id) ?></td>
            <td><?= h($users->disabled) ?></td>
            <td><?= h($users->user_created) ?></td>
            <td><?= h($users->session) ?></td>
            <td><?= h($users->cookie) ?></td>
            <td><?= h($users->ip) ?></td>
            <td><?= h($users->last_login) ?></td>
            <td><?= h($users->customer_id) ?></td>
            <td><?= h($users->company_name) ?></td>
            <td><?= h($users->is_online) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
