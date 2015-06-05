<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrCustomer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCustomer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrCustomers form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrCustomer) ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Customer') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('email');
            echo $this->Form->input('address');
            echo $this->Form->input('postal_code');
            echo $this->Form->input('country');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
