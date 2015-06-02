<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Billing Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Events'), ['controller' => 'TicketEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Event'), ['controller' => 'TicketEvents', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="billingTypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('order') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($billingTypes as $billingType): ?>
        <tr>
            <td><?= $this->Number->format($billingType->id) ?></td>
            <td><?= h($billingType->name) ?></td>
            <td><?= $this->Number->format($billingType->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $billingType->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billingType->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billingType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingType->id)]) ?>
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
