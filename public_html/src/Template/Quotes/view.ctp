<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Quote'), ['action' => 'edit', $quote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quote Types'), ['controller' => 'QuoteTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Type'), ['controller' => 'QuoteTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quotes view col-lg-10 col-md-9 columns">
    <h2><?= h($quote->name) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($quote->name) ?></p>
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $quote->has('customer') ? $this->Html->link($quote->customer->name, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote Type') ?></h6>
            <p><?= $quote->has('quote_type') ? $this->Html->link($quote->quote_type->name, ['controller' => 'QuoteTypes', 'action' => 'view', $quote->quote_type->id]) : '' ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($quote->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Projects') ?></h4>
    <?php if (!empty($quote->projects)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Project Status Id') ?></th>
            <th><?= __('Max Hours') ?></th>
            <th><?= __('Quoted Hours') ?></th>
            <th><?= __('Due Date') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($quote->projects as $projects): ?>
        <tr>
            <td><?= h($projects->id) ?></td>
            <td><?= h($projects->date_created) ?></td>
            <td><?= h($projects->name) ?></td>
            <td><?= h($projects->description) ?></td>
            <td><?= h($projects->project_status_id) ?></td>
            <td><?= h($projects->max_hours) ?></td>
            <td><?= h($projects->quoted_hours) ?></td>
            <td><?= h($projects->due_date) ?></td>
            <td><?= h($projects->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>

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
    <?php if (!empty($quote->tickets)): ?>
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
        <?php foreach ($quote->tickets as $tickets): ?>
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
