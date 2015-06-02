<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Ticket Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Event Types'), ['controller' => 'TicketEventTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Event Type'), ['controller' => 'TicketEventTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Types'), ['controller' => 'BillingTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Type'), ['controller' => 'BillingTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Time Types'), ['controller' => 'TimeTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Time Type'), ['controller' => 'TimeTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="ticketEvents form large-10 medium-9 columns">
    <?= $this->Form->create($ticketEvent) ?>
    <fieldset>
        <legend><?= __('Add Ticket Event') ?></legend>
        <?php
            echo $this->Form->input('ticket_id', ['options' => $tickets]);
            echo $this->Form->input('ticket_event_type_id', ['options' => $ticketEventTypes]);
            echo $this->Form->input('description');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('timestamp');
            echo $this->Form->input('billing_type_id', ['options' => $billingTypes]);
            echo $this->Form->input('time_type_id', ['options' => $timeTypes]);
            echo $this->Form->input('time_taken');
            echo $this->Form->input('resolution_date');
            echo $this->Form->input('time_start');
            echo $this->Form->input('time_end');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
