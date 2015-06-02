<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ticket Event'), ['action' => 'add']) ?></li>
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
<div class="ticketEvents index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('ticket_id') ?></th>
            <th><?= $this->Paginator->sort('ticket_event_type_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th><?= $this->Paginator->sort('billing_type_id') ?></th>
            <th><?= $this->Paginator->sort('time_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ticketEvents as $ticketEvent): ?>
        <tr>
            <td><?= $this->Number->format($ticketEvent->id) ?></td>
            <td>
                <?= $ticketEvent->has('ticket') ? $this->Html->link($ticketEvent->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $ticketEvent->ticket->id]) : '' ?>
            </td>
            <td>
                <?= $ticketEvent->has('ticket_event_type') ? $this->Html->link($ticketEvent->ticket_event_type->name, ['controller' => 'TicketEventTypes', 'action' => 'view', $ticketEvent->ticket_event_type->id]) : '' ?>
            </td>
            <td>
                <?= $ticketEvent->has('user') ? $this->Html->link($ticketEvent->user->id, ['controller' => 'Users', 'action' => 'view', $ticketEvent->user->id]) : '' ?>
            </td>
            <td><?= h($ticketEvent->timestamp) ?></td>
            <td>
                <?= $ticketEvent->has('billing_type') ? $this->Html->link($ticketEvent->billing_type->name, ['controller' => 'BillingTypes', 'action' => 'view', $ticketEvent->billing_type->id]) : '' ?>
            </td>
            <td>
                <?= $ticketEvent->has('time_type') ? $this->Html->link($ticketEvent->time_type->name, ['controller' => 'TimeTypes', 'action' => 'view', $ticketEvent->time_type->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticketEvent->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketEvent->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketEvent->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
