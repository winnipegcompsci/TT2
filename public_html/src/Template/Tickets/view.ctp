<div class="tickets view col-lg-12 col-md-12 columns">
    <h2>Ticket #<?= h($ticket->id) ?></h2>

    <div class="row ticket-details">
        <div class="col-lg-3 col-md-6 columns strings">
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

        <div class="col-lg-9 col-md-6 columns"> <!-- Ticket Details -->
            <div class="alert alert-info">
                <h4><i class="icon fa fa-info"></i><?= __('Problem Description') ?></h4>
                <p>
                    <?= $this->Text->autoParagraph(h($ticket->problem_description)) ?>
                    <a class="btn btn-primary btn-xs pull-right">...</a>
                </p>
                <br />
            </div>
        </div>
        
        <div class="columns col-lg-9 col-md-6">
            <div class="progress">
                    <?php
                    $className = "progress-bar-info";
                    if($ticket->completion < 60) {
                           $className = "progress-bar-warning";
                        } else if ($ticket->completion < 30) {
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
            <div class="alert alert-success">
                <h4><i class="icon fa fa-check"></i><?= __('Problem Solution') ?></h4>
                <p>
                    <?= $this->Text->autoParagraph(h($ticket->solution)) ?>
                    <a class="btn btn-primary btn-xs pull-right">...</a>
                    <br />
                </p>
            </div>
        </div>
        
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
    </div> <!-- end row -->
</div>

