<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Types'), ['controller' => 'ContactTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Type'), ['controller' => 'ContactTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contacts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('address_id') ?></th>
            <th><?= $this->Paginator->sort('contact_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= $this->Number->format($contact->id) ?></td>
            <td><?= h($contact->first_name) ?></td>
            <td><?= h($contact->last_name) ?></td>
            <td><?= $this->Number->format($contact->customer_id) ?></td>
            <td>
                <?= $contact->has('address') ? $this->Html->link($contact->address->name, ['controller' => 'Addresses', 'action' => 'view', $contact->address->id]) : '' ?>
            </td>
            <td>
                <?= $contact->has('contact_type') ? $this->Html->link($contact->contact_type->name, ['controller' => 'ContactTypes', 'action' => 'view', $contact->contact_type->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
