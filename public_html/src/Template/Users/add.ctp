<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Notes'), ['controller' => 'CustomerNotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Note'), ['controller' => 'CustomerNotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Tasks'), ['controller' => 'ProjectTasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Task'), ['controller' => 'ProjectTasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket History'), ['controller' => 'TicketHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket History'), ['controller' => 'TicketHistory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('secretkey');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('user_role_id', ['options' => $userRoles]);
            echo $this->Form->input('user_created');
            echo $this->Form->input('session');
            echo $this->Form->input('cookie');
            echo $this->Form->input('ip');
            echo $this->Form->input('last_login');
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('company_name');
            echo $this->Form->input('is_online');
            echo $this->Form->input('picture');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
