<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Billing Plan Line'), ['action' => 'edit', $billingPlanLine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing Plan Line'), ['action' => 'delete', $billingPlanLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingPlanLine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plan Lines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan Line'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['controller' => 'BillingPlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['controller' => 'BillingPlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Time Types'), ['controller' => 'TimeTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Type'), ['controller' => 'TimeTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingPlanLines view large-10 medium-9 columns">
    <h2><?= h($billingPlanLine->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Billing Plan') ?></h6>
            <p><?= $billingPlanLine->has('billing_plan') ? $this->Html->link($billingPlanLine->billing_plan->name, ['controller' => 'BillingPlans', 'action' => 'view', $billingPlanLine->billing_plan->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Time Type') ?></h6>
            <p><?= $billingPlanLine->has('time_type') ? $this->Html->link($billingPlanLine->time_type->name, ['controller' => 'TimeTypes', 'action' => 'view', $billingPlanLine->time_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->id) ?></p>
            <h6 class="subheader"><?= __('Minutes Per Unit') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->minutes_per_unit) ?></p>
            <h6 class="subheader"><?= __('Min Num Unit') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->min_num_unit) ?></p>
            <h6 class="subheader"><?= __('Min Unit') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->min_unit) ?></p>
            <h6 class="subheader"><?= __('Round Up At Min') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->round_up_at_min) ?></p>
            <h6 class="subheader"><?= __('Emerg Minutes Per Unit') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->emerg_minutes_per_unit) ?></p>
            <h6 class="subheader"><?= __('Emerg Min Num Units') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->emerg_min_num_units) ?></p>
            <h6 class="subheader"><?= __('Emerg Min Unit') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->emerg_min_unit) ?></p>
            <h6 class="subheader"><?= __('Emerg Round Up At Min') ?></h6>
            <p><?= $this->Number->format($billingPlanLine->emerg_round_up_at_min) ?></p>
        </div>
    </div>
</div>
