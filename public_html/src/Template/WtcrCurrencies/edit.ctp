<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrCurrency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrency->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrCurrencies form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrCurrency) ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Currency') ?></legend>
        <?php
            echo $this->Form->input('currency_name');
            echo $this->Form->input('wtcr_currency_provider_id');
            echo $this->Form->input('abbreviation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
