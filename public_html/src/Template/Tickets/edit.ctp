<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticket->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Types'), ['controller' => 'TicketTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Type'), ['controller' => 'TicketTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Service Types'), ['controller' => 'ServiceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service Type'), ['controller' => 'ServiceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Priorities'), ['controller' => 'TicketPriorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Priority'), ['controller' => 'TicketPriorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'TicketStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'TicketStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Sites'), ['controller' => 'CustomerSites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Statuses'), ['controller' => 'BillingStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Status'), ['controller' => 'BillingStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket History'), ['controller' => 'TicketHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket History'), ['controller' => 'TicketHistory', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tickets form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Edit Ticket') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('contact_id', ['options' => $contacts]);
            echo $this->Form->input('ticket_type_id', ['options' => $ticketTypes]);
            echo $this->Form->input('service_type_id', ['options' => $serviceTypes]);
            echo $this->Form->input('ticket_priority_id', ['options' => $ticketPriorities]);
            echo $this->Form->input('problem_description');
            echo $this->Form->input('solution');
            echo $this->Form->input('ticket_status_id', ['options' => $ticketStatuses]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('dis');
            echo $this->Form->input('customer_site_id', ['options' => $customerSites]);
            echo $this->Form->input('project_id', ['options' => $projects]);
            echo $this->Form->input('completion');
            echo $this->Form->input('billing_status_id', ['options' => $billingStatuses]);
            echo $this->Form->input('quote_id', ['options' => $quotes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
