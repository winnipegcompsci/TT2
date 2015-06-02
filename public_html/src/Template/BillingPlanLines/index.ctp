<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Billing Plan Line'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['controller' => 'BillingPlans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['controller' => 'BillingPlans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Time Types'), ['controller' => 'TimeTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Time Type'), ['controller' => 'TimeTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="billingPlanLines index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('billing_plan_id') ?></th>
            <th><?= $this->Paginator->sort('time_type_id') ?></th>
            <th><?= $this->Paginator->sort('minutes_per_unit') ?></th>
            <th><?= $this->Paginator->sort('min_num_unit') ?></th>
            <th><?= $this->Paginator->sort('min_unit') ?></th>
            <th><?= $this->Paginator->sort('round_up_at_min') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($billingPlanLines as $billingPlanLine): ?>
        <tr>
            <td><?= $this->Number->format($billingPlanLine->id) ?></td>
            <td>
                <?= $billingPlanLine->has('billing_plan') ? $this->Html->link($billingPlanLine->billing_plan->name, ['controller' => 'BillingPlans', 'action' => 'view', $billingPlanLine->billing_plan->id]) : '' ?>
            </td>
            <td>
                <?= $billingPlanLine->has('time_type') ? $this->Html->link($billingPlanLine->time_type->name, ['controller' => 'TimeTypes', 'action' => 'view', $billingPlanLine->time_type->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($billingPlanLine->minutes_per_unit) ?></td>
            <td><?= $this->Number->format($billingPlanLine->min_num_unit) ?></td>
            <td><?= $this->Number->format($billingPlanLine->min_unit) ?></td>
            <td><?= $this->Number->format($billingPlanLine->round_up_at_min) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $billingPlanLine->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billingPlanLine->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billingPlanLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlanLine->id)]) ?>
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
