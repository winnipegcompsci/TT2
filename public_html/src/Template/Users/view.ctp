<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Notes'), ['controller' => 'CustomerNotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Note'), ['controller' => 'CustomerNotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Tasks'), ['controller' => 'ProjectTasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Task'), ['controller' => 'ProjectTasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket History'), ['controller' => 'TicketHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket History'), ['controller' => 'TicketHistory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view col-lg-10 col-md-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($user->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($user->last_name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('User Role') ?></h6>
            <p><?= $user->has('user_role') ? $this->Html->link($user->user_role->name, ['controller' => 'UserRoles', 'action' => 'view', $user->user_role->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Session') ?></h6>
            <p><?= h($user->session) ?></p>
            <h6 class="subheader"><?= __('Cookie') ?></h6>
            <p><?= h($user->cookie) ?></p>
            <h6 class="subheader"><?= __('Ip') ?></h6>
            <p><?= h($user->ip) ?></p>
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $user->has('customer') ? $this->Html->link($user->customer->name, ['controller' => 'Customers', 'action' => 'view', $user->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Company Name') ?></h6>
            <p><?= h($user->company_name) ?></p>
            <h6 class="subheader"><?= __('Picture') ?></h6>
            <p><?= h($user->picture) ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Is Online') ?></h6>
            <p><?= $this->Number->format($user->is_online) ?></p>
        </div>
        <div class="col-lg-2 columns dates end">
            <h6 class="subheader"><?= __('User Created') ?></h6>
            <p><?= h($user->user_created) ?></p>
            <h6 class="subheader"><?= __('Last Login') ?></h6>
            <p><?= h($user->last_login) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <h6 class="subheader"><?= __('Secretkey') ?></h6>
            <?= $this->Text->autoParagraph(h($user->secretkey)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related CustomerNotes') ?></h4>
    <?php if (!empty($user->customer_notes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Text') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Permission') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->customer_notes as $customerNotes): ?>
        <tr>
            <td><?= h($customerNotes->id) ?></td>
            <td><?= h($customerNotes->customer_id) ?></td>
            <td><?= h($customerNotes->user_id) ?></td>
            <td><?= h($customerNotes->title) ?></td>
            <td><?= h($customerNotes->text) ?></td>
            <td><?= h($customerNotes->timestamp) ?></td>
            <td><?= h($customerNotes->permission) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CustomerNotes', 'action' => 'view', $customerNotes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerNotes', 'action' => 'edit', $customerNotes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerNotes', 'action' => 'delete', $customerNotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNotes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Messages') ?></h4>
    <?php if (!empty($user->messages)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Text') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->messages as $messages): ?>
        <tr>
            <td><?= h($messages->id) ?></td>
            <td><?= h($messages->user_id) ?></td>
            <td><?= h($messages->timestamp) ?></td>
            <td><?= h($messages->text) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related ProjectTasks') ?></h4>
    <?php if (!empty($user->project_tasks)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Body') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Deadline') ?></th>
            <th><?= __('Done') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->project_tasks as $projectTasks): ?>
        <tr>
            <td><?= h($projectTasks->id) ?></td>
            <td><?= h($projectTasks->project_id) ?></td>
            <td><?= h($projectTasks->title) ?></td>
            <td><?= h($projectTasks->body) ?></td>
            <td><?= h($projectTasks->user_id) ?></td>
            <td><?= h($projectTasks->deadline) ?></td>
            <td><?= h($projectTasks->done) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ProjectTasks', 'action' => 'view', $projectTasks->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectTasks', 'action' => 'edit', $projectTasks->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectTasks', 'action' => 'delete', $projectTasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTasks->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related TicketEvents') ?></h4>
    <?php if (!empty($user->ticket_events)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('Ticket Event Type Id') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Billing Type Id') ?></th>
            <th><?= __('Time Type Id') ?></th>
            <th><?= __('Time Taken') ?></th>
            <th><?= __('Is Resolution') ?></th>
            <th><?= __('Resolution Date') ?></th>
            <th><?= __('Time Start') ?></th>
            <th><?= __('Time End') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->ticket_events as $ticketEvents): ?>
        <tr>
            <td><?= h($ticketEvents->id) ?></td>
            <td><?= h($ticketEvents->ticket_id) ?></td>
            <td><?= h($ticketEvents->ticket_event_type_id) ?></td>
            <td><?= h($ticketEvents->description) ?></td>
            <td><?= h($ticketEvents->user_id) ?></td>
            <td><?= h($ticketEvents->timestamp) ?></td>
            <td><?= h($ticketEvents->billing_type_id) ?></td>
            <td><?= h($ticketEvents->time_type_id) ?></td>
            <td><?= h($ticketEvents->time_taken) ?></td>
            <td><?= h($ticketEvents->is_resolution) ?></td>
            <td><?= h($ticketEvents->resolution_date) ?></td>
            <td><?= h($ticketEvents->time_start) ?></td>
            <td><?= h($ticketEvents->time_end) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'TicketEvents', 'action' => 'view', $ticketEvents->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'TicketEvents', 'action' => 'edit', $ticketEvents->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TicketEvents', 'action' => 'delete', $ticketEvents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketEvents->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related TicketHistory') ?></h4>
    <?php if (!empty($user->ticket_history)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Action') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->ticket_history as $ticketHistory): ?>
        <tr>
            <td><?= h($ticketHistory->id) ?></td>
            <td><?= h($ticketHistory->ticket_id) ?></td>
            <td><?= h($ticketHistory->user_id) ?></td>
            <td><?= h($ticketHistory->date) ?></td>
            <td><?= h($ticketHistory->action) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'TicketHistory', 'action' => 'view', $ticketHistory->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'TicketHistory', 'action' => 'edit', $ticketHistory->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TicketHistory', 'action' => 'delete', $ticketHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketHistory->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Tickets') ?></h4>
    <?php if (!empty($user->tickets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Ticket Type Id') ?></th>
            <th><?= __('Service Type Id') ?></th>
            <th><?= __('Ticket Priority Id') ?></th>
            <th><?= __('Problem Description') ?></th>
            <th><?= __('Solution') ?></th>
            <th><?= __('Ticket Status Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Dis') ?></th>
            <th><?= __('Customer Site Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Completion') ?></th>
            <th><?= __('Billing Status Id') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->tickets as $tickets): ?>
        <tr>
            <td><?= h($tickets->id) ?></td>
            <td><?= h($tickets->date_created) ?></td>
            <td><?= h($tickets->customer_id) ?></td>
            <td><?= h($tickets->contact_id) ?></td>
            <td><?= h($tickets->ticket_type_id) ?></td>
            <td><?= h($tickets->service_type_id) ?></td>
            <td><?= h($tickets->ticket_priority_id) ?></td>
            <td><?= h($tickets->problem_description) ?></td>
            <td><?= h($tickets->solution) ?></td>
            <td><?= h($tickets->ticket_status_id) ?></td>
            <td><?= h($tickets->user_id) ?></td>
            <td><?= h($tickets->dis) ?></td>
            <td><?= h($tickets->customer_site_id) ?></td>
            <td><?= h($tickets->project_id) ?></td>
            <td><?= h($tickets->completion) ?></td>
            <td><?= h($tickets->billing_status_id) ?></td>
            <td><?= h($tickets->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
