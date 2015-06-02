<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Customer Site'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="customerSites index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('site_name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customerSites as $customerSite): ?>
        <tr>
            <td><?= $this->Number->format($customerSite->id) ?></td>
            <td>
                <?= $customerSite->has('customer') ? $this->Html->link($customerSite->customer->name, ['controller' => 'Customers', 'action' => 'view', $customerSite->customer->id]) : '' ?>
            </td>
            <td><?= h($customerSite->site_name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customerSite->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerSite->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerSite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerSite->id)]) ?>
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
