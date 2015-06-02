<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerSite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerSite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Sites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="customerSites form large-10 medium-9 columns">
    <?= $this->Form->create($customerSite) ?>
    <fieldset>
        <legend><?= __('Edit Customer Site') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('site_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
