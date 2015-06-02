<div class="actions columns col-lg-2 col-md-3 pull-right">
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
    <h2>Ticket #<?= h($ticket->id) ?></h2>

    <div class="row ticket-details">
        <p>
            <div class="col-lg-3 columns strings">
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
        </p>
    
        <div class="col-lg-9 columns">
            <div class="columns col-lg-12">
                    <div class="panel">
                    <div class="panel-header"><?= __('Problem Description') ?></div>
                    <div class="panel-body">
                        <?= $this->Text->autoParagraph(h($ticket->problem_description)) ?>
                    </div>
                </div>

                <div class="columns col-lg-12">
                    <div class="panel">
                    <div class="panel-header"><?= __('Problem Solution') ?></div>
                    <div class="panel-body">
                    <?= $this->Text->autoParagraph(h($ticket->solution)) ?>
                    </div>
                </div>
                
                <div class="columns col-lg-12 col-md-12 col-sm-3">
                    <div class="progress">
                        <?php
                            if($ticket->completion < 60) {
                               $className = "progress-bar-warning";
                            } else if ($ticket->completion < 30) {
                                $className = "progress-bar-danger";
                            } else if ($ticket->completion >= 60) {
                                $className = "progress-bar-success";
                            }
                        ?>
                        <div class="progress-bar progress-bar-primary progress-bar-striped <?= $className ?>" role="progressbar" aria-valuenow="<?= $this->Number->format($ticket->completion) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $this->Number->format($ticket->completion) ?>%">
                        <span class="sr-only"><?= $this->Number->format($ticket->completion) ?> Complete (success)</span>
                        </div>
                    </div>
                </div>
            </div>
        </p>
        
        
        
        <div class="timeline">
        <div class="column col-lg-9 pull-right">
            <h4 class="subheader"><?= __('Ticket Events') ?></h4>
            <?php if (!empty($ticket->ticket_events)): ?>
            <ul class="timeline">

            <? foreach ($ticket->ticket_events as $ticketEvent) {  ?>
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-red">
                    <?= $ticketEvent->time_end ?>
                </span>
            </li>
            <!-- /.timeline-label -->

            <!-- timeline item -->
            <li>
                <!-- timeline icon -->
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> <?= $ticketEvent->time_taken . " minutes" ?></span>

                    <h3 class="timeline-header"><a href="#"><?= $ticketEvent->user_id ?></a> ...</h3>

                    <div class="timeline-body">
                        <?= $ticketEvent->description ?>
                    </div>

                    <div class='timeline-footer'>
                        <a class="btn btn-primary btn-xs">...</a>
                    </div>
                </div>
            </li>
            <?php } // end foreach ?>
            <!-- END timeline item -->
            </ul>
            <?php endif; ?>
        </div>
    </div> <!-- end timeline row --->
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
