<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Billing Plan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Plan Lines'), ['controller' => 'BillingPlanLines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Plan Line'), ['controller' => 'BillingPlanLines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="billingPlans index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($billingPlans as $billingPlan): ?>
        <tr>
            <td><?= $this->Number->format($billingPlan->id) ?></td>
            <td><?= h($billingPlan->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $billingPlan->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billingPlan->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billingPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlan->id)]) ?>
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
