<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Billing Type'), ['action' => 'edit', $billingType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing Type'), ['action' => 'delete', $billingType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billing Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingTypes view large-10 medium-9 columns">
    <h2><?= h($billingType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($billingType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($billingType->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($billingType->order) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related TicketEvents') ?></h4>
    <?php if (!empty($billingType->ticket_events)): ?>
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
        <?php foreach ($billingType->ticket_events as $ticketEvents): ?>
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
