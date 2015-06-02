<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Quote'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Types'), ['controller' => 'QuoteTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Type'), ['controller' => 'QuoteTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="quotes index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('quote_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($quotes as $quote): ?>
        <tr>
            <td><?= $this->Number->format($quote->id) ?></td>
            <td><?= h($quote->name) ?></td>
            <td>
                <?= $quote->has('customer') ? $this->Html->link($quote->customer->name, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?>
            </td>
            <td>
                <?= $quote->has('quote_type') ? $this->Html->link($quote->quote_type->name, ['controller' => 'QuoteTypes', 'action' => 'view', $quote->quote_type->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $quote->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quote->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?>
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
