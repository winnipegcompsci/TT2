<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Types'), ['controller' => 'QuoteTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Type'), ['controller' => 'QuoteTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="quotes form large-10 medium-9 columns">
    <?= $this->Form->create($quote) ?>
    <fieldset>
        <legend><?= __('Edit Quote') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('quote_type_id', ['options' => $quoteTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
