<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Types'), ['controller' => 'ContactTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Type'), ['controller' => 'ContactTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contacts form large-10 medium-9 columns">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Edit Contact') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('customer_id');
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('contact_type_id', ['options' => $contactTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
