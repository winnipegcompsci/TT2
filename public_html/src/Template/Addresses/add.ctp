<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="addresses form large-10 medium-9 columns">
    <?= $this->Form->create($address) ?>
    <fieldset>
        <legend><?= __('Add Address') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('address');
            echo $this->Form->input('postal_code');
            echo $this->Form->input('city');
            echo $this->Form->input('province_id', ['options' => $provinces]);
            echo $this->Form->input('country_id', ['options' => $countries]);
            echo $this->Form->input('fax');
            echo $this->Form->input('website');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
