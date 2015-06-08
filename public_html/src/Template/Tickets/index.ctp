<div class="actions columns col-lg-2 col-md-3">
    <div class="box box-primary box-solid">
        <div class="box-header with-border"><?= __('Actions') ?></div>
        
        <div class="box-body">
            <ul class="side-nav">
                <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Ticket Type'), ['controller' => 'TicketTypes', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Service Type'), ['controller' => 'ServiceTypes', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Ticket Priority'), ['controller' => 'TicketPriorities', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'TicketStatuses', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Billing Status'), ['controller' => 'BillingStatuses', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New Ticket History'), ['controller' => 'TicketHistory', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>   
</div>
<div class="tickets index col-lg-10 col-md-9 columns">
    <div class="box box-primary box-solid">
        <div class="box-header with-border"><?= __('All Tickets') ?></div>
        <div class="box-body">
            <table id="tickets-table" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= __('ID') ?></th>
                        <th><?= __('Date Created') ?></th>
                        <th><?= __('Customer') ?></th>
                        <th><?= __('Contact') ?></th>
                        <th><?= __('Assigned User') ?></th>
                        <th><?= __('Type') ?></th>
                        <th><?= __('Service Type') ?></th>
                        <th><?= __('Ticket Priority') ?></th>
                        <th><?= __('Completion') ?></th>
                        <th><?= __('Billing Status') ?></th>
                        <th><?= __('Time Used') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td><?= $this->Html->link("Ticket #" . str_pad($ticket->id, 4, "0", STR_PAD_LEFT ), ['action' => 'view', $ticket->id]) ?></td>
                        <td><?= h($ticket->date_created) ?></td>
                        <td>
                            <?= $ticket->has('customer') ? $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer->id]) : '' ?>
                        </td>
                        <td>
                            <?= $ticket->has('contact') ? $this->Html->link($ticket->contact->first_name . ' ' . $ticket->contact->last_name, ['controller' => 'Contacts', 'action' => 'view', $ticket->contact->id]) : '' ?>
                        </td>
                        <td>
                            <?= $ticket->has('user') ? $this->Html->link($ticket->user->getFullName(), ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?>
                        </td>
                        <td>
                            <?= $ticket->has('ticket_type') ? $this->Html->link($ticket->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $ticket->ticket_type->id]) : '' ?>
                        </td>
                        <td>
                            <?= $ticket->has('service_type') ? $this->Html->link($ticket->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $ticket->service_type->id]) : '' ?>
                        </td>
                        <td>
                            <?= $ticket->has('ticket_priority') ? $this->Html->link($ticket->ticket_priority->name, ['controller' => 'TicketPriorities', 'action' => 'view', $ticket->ticket_priority->id]) : '' ?>
                        </td>
                        <td>
                            <div class="progress">
                                <?php
                                $className = "progress-bar-info";
                                if($ticket->completion < 60) {
                                    $className = "progress-bar-warning";
                                } 
                                if($ticket->completion < 60 && $ticket->completion < 30) {
                                    $className = "progress-bar-danger";
                                } else if ($ticket->completion >= 60) {
                                    $className = "progress-bar-success";
                                }
                                ?>
                                <div class="progress-bar progress-bar-primary progress-bar-striped <?= $className ?>" role="progressbar" aria-valuenow="<?= $this->Number->format($ticket->completion) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $this->Number->format($ticket->completion) ?>%">
                                    <span class="sr-only"><?= $this->Number->format($ticket->completion) ?> Complete </span>
                                    <?= $this->Number->format($ticket->completion) ?>% Complete
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php 
                                $class = "text-yellow";
                                if($ticket->billing_status->billing_status == "Open Ticket") {
                                    $class = "text-aqua";
                                }
                                if($ticket->billing_status->billing_status == "Overdue") {
                                    $class= "text-red";
                                }
                                if($ticket->billing_status->billing_status == "Paid") {
                                    $class="text-green";
                                }
                            ?>
                            <span class="<?= $class ?>">
                                <?= __($ticket->billing_status->billing_status); ?>
                            </span>
                        </td>
                        <td>
                            <?= $ticket->getMinutesUsed(); ?> min.
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- end box body -->
    
    <?php 
    $this->Html->scriptStart(['block' => true]);
    echo "$(document).ready(function() {
        $('#tickets-table').DataTable();
    });";
    $this->Html->scriptEnd();
    ?>
</div>
