<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrCustomers index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('postal_code') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCustomers as $wtcrCustomer): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCustomer->id) ?></td>
            <td><?= h($wtcrCustomer->username) ?></td>
            <td><?= h($wtcrCustomer->first_name) ?></td>
            <td><?= h($wtcrCustomer->last_name) ?></td>
            <td><?= h($wtcrCustomer->email) ?></td>
            <td><?= h($wtcrCustomer->address) ?></td>
            <td><?= h($wtcrCustomer->postal_code) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCustomer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCustomer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCustomer->id)]) ?>
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
