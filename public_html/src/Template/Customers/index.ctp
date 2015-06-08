<div class="actions columns col-lg-2 col-md-3">
    <div class="box box-primary box-solid">
        <div class="box-header with-border"><?= __('Actions') ?></div>
        
        <div class="box-body">
            <ul class="side-nav">
                <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Billing Plans'), ['controller' => 'BillingPlans', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Billing Plan'), ['controller' => 'BillingPlans', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Customer Notes'), ['controller' => 'CustomerNotes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Customer Note'), ['controller' => 'CustomerNotes', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Customer Sites'), ['controller' => 'CustomerSites', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
</div>   
   
   
<div class="customers index col-lg-10 col-md-9 columns">
   <div class="box box-primary box-solid">
        <div class="box-header with-border"><?= __('Enigma Networks\' Customers') ?></div>
        
        <div class="box-body">
    <table id="customers-table" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('address_id') ?></th>
            <th><?= $this->Paginator->sort('contact_id') ?></th>
            <th><?= $this->Paginator->sort('number') ?></th>
            <th><?= $this->Paginator->sort('billing_plan_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $this->Number->format($customer->id) ?></td>
            <td><?= h($customer->name) ?></td>
            <td>
                <?= $customer->has('address') ? $this->Html->link($customer->address->name, ['controller' => 'Addresses', 'action' => 'view', $customer->address->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($customer->contact_id) ?></td>
            <td><?= h($customer->number) ?></td>
            <td>
                <?= $customer->has('billing_plan') ? $this->Html->link($customer->billing_plan->name, ['controller' => 'BillingPlans', 'action' => 'view', $customer->billing_plan->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    </div>
</div>

    <?php 
    $this->Html->scriptStart(['block' => true]);
    echo "$(document).ready(function() {
    $('#customers-table').DataTable();
} );";
    $this->Html->scriptEnd();
    ?>