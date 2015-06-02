<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
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
<div class="customers form large-10 medium-9 columns">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Edit Customer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('contact_id');
            echo $this->Form->input('number');
            echo $this->Form->input('billing_plan_id', ['options' => $billingPlans]);
            echo $this->Form->input('customer_notes_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
