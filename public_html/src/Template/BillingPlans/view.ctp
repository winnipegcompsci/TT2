<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Billing Plan'), ['action' => 'edit', $billingPlan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing Plan'), ['action' => 'delete', $billingPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plan Lines'), ['controller' => 'BillingPlanLines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan Line'), ['controller' => 'BillingPlanLines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingPlans view large-10 medium-9 columns">
    <h2><?= h($billingPlan->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($billingPlan->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($billingPlan->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related BillingPlanLines') ?></h4>
    <?php if (!empty($billingPlan->billing_plan_lines)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Billing Plan Id') ?></th>
            <th><?= __('Time Type Id') ?></th>
            <th><?= __('Minutes Per Unit') ?></th>
            <th><?= __('Min Num Unit') ?></th>
            <th><?= __('Min Unit') ?></th>
            <th><?= __('Round Up At Min') ?></th>
            <th><?= __('Emerg Minutes Per Unit') ?></th>
            <th><?= __('Emerg Min Num Units') ?></th>
            <th><?= __('Emerg Min Unit') ?></th>
            <th><?= __('Emerg Round Up At Min') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($billingPlan->billing_plan_lines as $billingPlanLines): ?>
        <tr>
            <td><?= h($billingPlanLines->id) ?></td>
            <td><?= h($billingPlanLines->billing_plan_id) ?></td>
            <td><?= h($billingPlanLines->time_type_id) ?></td>
            <td><?= h($billingPlanLines->minutes_per_unit) ?></td>
            <td><?= h($billingPlanLines->min_num_unit) ?></td>
            <td><?= h($billingPlanLines->min_unit) ?></td>
            <td><?= h($billingPlanLines->round_up_at_min) ?></td>
            <td><?= h($billingPlanLines->emerg_minutes_per_unit) ?></td>
            <td><?= h($billingPlanLines->emerg_min_num_units) ?></td>
            <td><?= h($billingPlanLines->emerg_min_unit) ?></td>
            <td><?= h($billingPlanLines->emerg_round_up_at_min) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'BillingPlanLines', 'action' => 'view', $billingPlanLines->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'BillingPlanLines', 'action' => 'edit', $billingPlanLines->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BillingPlanLines', 'action' => 'delete', $billingPlanLines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlanLines->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Customers') ?></h4>
    <?php if (!empty($billingPlan->customers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Number') ?></th>
            <th><?= __('Disabled') ?></th>
            <th><?= __('Billing Plan Id') ?></th>
            <th><?= __('Customer Notes Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($billingPlan->customers as $customers): ?>
        <tr>
            <td><?= h($customers->id) ?></td>
            <td><?= h($customers->name) ?></td>
            <td><?= h($customers->address_id) ?></td>
            <td><?= h($customers->contact_id) ?></td>
            <td><?= h($customers->number) ?></td>
            <td><?= h($customers->disabled) ?></td>
            <td><?= h($customers->billing_plan_id) ?></td>
            <td><?= h($customers->customer_notes_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
