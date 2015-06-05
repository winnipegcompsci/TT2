<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Billing Status'), ['action' => 'edit', $billingStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing Status'), ['action' => 'delete', $billingStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billing Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="billingStatuses view col-lg-10 col-md-9 columns">
    <h2><?= h($billingStatus->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Billing Status') ?></h6>
            <p><?= h($billingStatus->billing_status) ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($billingStatus->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Tickets') ?></h4>
    <?php if (!empty($billingStatus->tickets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Ticket Type Id') ?></th>
            <th><?= __('Service Type Id') ?></th>
            <th><?= __('Ticket Priority Id') ?></th>
            <th><?= __('Problem Description') ?></th>
            <th><?= __('Solution') ?></th>
            <th><?= __('Ticket Status Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Dis') ?></th>
            <th><?= __('Customer Site Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Completion') ?></th>
            <th><?= __('Billing Status Id') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($billingStatus->tickets as $tickets): ?>
        <tr>
            <td><?= h($tickets->id) ?></td>
            <td><?= h($tickets->date_created) ?></td>
            <td><?= h($tickets->customer_id) ?></td>
            <td><?= h($tickets->contact_id) ?></td>
            <td><?= h($tickets->ticket_type_id) ?></td>
            <td><?= h($tickets->service_type_id) ?></td>
            <td><?= h($tickets->ticket_priority_id) ?></td>
            <td><?= h($tickets->problem_description) ?></td>
            <td><?= h($tickets->solution) ?></td>
            <td><?= h($tickets->ticket_status_id) ?></td>
            <td><?= h($tickets->user_id) ?></td>
            <td><?= h($tickets->dis) ?></td>
            <td><?= h($tickets->customer_site_id) ?></td>
            <td><?= h($tickets->project_id) ?></td>
            <td><?= h($tickets->completion) ?></td>
            <td><?= h($tickets->billing_status_id) ?></td>
            <td><?= h($tickets->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
