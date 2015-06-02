<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="addresses index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('postal_code') ?></th>
            <th><?= $this->Paginator->sort('city') ?></th>
            <th><?= $this->Paginator->sort('province_id') ?></th>
            <th><?= $this->Paginator->sort('country_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($addresses as $address): ?>
        <tr>
            <td><?= $this->Number->format($address->id) ?></td>
            <td><?= h($address->name) ?></td>
            <td><?= h($address->address) ?></td>
            <td><?= h($address->postal_code) ?></td>
            <td><?= h($address->city) ?></td>
            <td>
                <?= $address->has('province') ? $this->Html->link($address->province->name, ['controller' => 'Provinces', 'action' => 'view', $address->province->id]) : '' ?>
            </td>
            <td>
                <?= $address->has('country') ? $this->Html->link($address->country->name, ['controller' => 'Countries', 'action' => 'view', $address->country->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $address->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
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
