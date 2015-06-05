<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Billing Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="billingStatuses index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('billing_status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($billingStatuses as $billingStatus): ?>
        <tr>
            <td><?= $this->Number->format($billingStatus->id) ?></td>
            <td><?= h($billingStatus->billing_status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $billingStatus->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billingStatus->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billingStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingStatus->id)]) ?>
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
