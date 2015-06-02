<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ticket Event'), ['action' => 'edit', $ticketEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket Event'), ['action' => 'delete', $ticketEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketEvent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Event Types'), ['controller' => 'TicketEventTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event Type'), ['controller' => 'TicketEventTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Types'), ['controller' => 'BillingTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Type'), ['controller' => 'BillingTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Time Types'), ['controller' => 'TimeTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Type'), ['controller' => 'TimeTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketEvents view large-10 medium-9 columns">
    <h2><?= h($ticketEvent->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Ticket') ?></h6>
            <p><?= $ticketEvent->has('ticket') ? $this->Html->link($ticketEvent->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $ticketEvent->ticket->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Ticket Event Type') ?></h6>
            <p><?= $ticketEvent->has('ticket_event_type') ? $this->Html->link($ticketEvent->ticket_event_type->name, ['controller' => 'TicketEventTypes', 'action' => 'view', $ticketEvent->ticket_event_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $ticketEvent->has('user') ? $this->Html->link($ticketEvent->user->id, ['controller' => 'Users', 'action' => 'view', $ticketEvent->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Billing Type') ?></h6>
            <p><?= $ticketEvent->has('billing_type') ? $this->Html->link($ticketEvent->billing_type->name, ['controller' => 'BillingTypes', 'action' => 'view', $ticketEvent->billing_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Time Type') ?></h6>
            <p><?= $ticketEvent->has('time_type') ? $this->Html->link($ticketEvent->time_type->name, ['controller' => 'TimeTypes', 'action' => 'view', $ticketEvent->time_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ticketEvent->id) ?></p>
            <h6 class="subheader"><?= __('Time Taken') ?></h6>
            <p><?= $this->Number->format($ticketEvent->time_taken) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($ticketEvent->timestamp) ?></p>
            <h6 class="subheader"><?= __('Resolution Date') ?></h6>
            <p><?= h($ticketEvent->resolution_date) ?></p>
            <h6 class="subheader"><?= __('Time Start') ?></h6>
            <p><?= h($ticketEvent->time_start) ?></p>
            <h6 class="subheader"><?= __('Time End') ?></h6>
            <p><?= h($ticketEvent->time_end) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($ticketEvent->description)) ?>
        </div>
    </div>
</div>
