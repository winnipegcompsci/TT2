<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Types'), ['controller' => 'TicketTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Type'), ['controller' => 'TicketTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service Types'), ['controller' => 'ServiceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Type'), ['controller' => 'ServiceTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Priorities'), ['controller' => 'TicketPriorities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Priority'), ['controller' => 'TicketPriorities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'TicketStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'TicketStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Sites'), ['controller' => 'CustomerSites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Statuses'), ['controller' => 'BillingStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Status'), ['controller' => 'BillingStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket History'), ['controller' => 'TicketHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket History'), ['controller' => 'TicketHistory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tickets view col-lg-10 col-md-9 columns">
    <h2><?= h($ticket->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Contact') ?></h6>
            <p><?= $ticket->has('contact') ? $this->Html->link($ticket->contact->id, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Type') ?></h6>
            <p><?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Service Type') ?></h6>
            <p><?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Priority') ?></h6>
            <p><?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Status') ?></h6>
            <p><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'TicketStatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $ticket->has('user') ? $this->Html->link($ticket->user->id, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Customer Site') ?></h6>
            <p><?= $ticket->has('customer_site') ? $this->Html->link($ticket->customer_site->id, ['controller' => 'CustomerSites', 'action' => 'view', $ticket->customer_site->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Project') ?></h6>
            <p><?= $ticket->has('project') ? $this->Html->link($ticket->project->name, ['controller' => 'Projects', 'action' => 'view', $ticket->project->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Billing Status') ?></h6>
            <p><?= $ticket->has('billing_status') ? $this->Html->link($ticket->billing_status->id, ['controller' => 'BillingStatuses', 'action' => 'view', $ticket->billing_status->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote') ?></h6>
            <p><?= $ticket->has('quote') ? $this->Html->link($ticket->quote->name, ['controller' => 'Quotes', 'action' => 'view', $ticket->quote->id]) : '' ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ticket->id) ?></p>
            <h6 class="subheader"><?= __('Completion') ?></h6>
            <p><?= $this->Number->format($ticket->completion) ?></p>
        </div>
        <div class="col-lg-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($ticket->date_created) ?></p>
            <h6 class="subheader"><?= __('Dis') ?></h6>
            <p><?= h($ticket->dis) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <h6 class="subheader"><?= __('Problem Description') ?></h6>
            <?= $this->Text->autoParagraph(h($ticket->problem_description)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <h6 class="subheader"><?= __('Solution') ?></h6>
            <?= $this->Text->autoParagraph(h($ticket->solution)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related TicketEvents') ?></h4>
    <?php if (!empty($ticket->ticket_events)): ?>
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
        <?php foreach ($ticket->ticket_events as $ticketEvents): ?>
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
    <?php if (!empty($ticket->ticket_history)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Ticket Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Action') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($ticket->ticket_history as $ticketHistory): ?>
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
