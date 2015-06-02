<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inventory'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Vendors'), ['controller' => 'WtcrVendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Vendor'), ['controller' => 'WtcrVendors', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="inventory form large-10 medium-9 columns">
    <?= $this->Form->create($inventory) ?>
    <fieldset>
        <legend><?= __('Edit Inventory') ?></legend>
        <?php
            echo $this->Form->input('wtcr_sku');
            echo $this->Form->input('name');
            echo $this->Form->input('wtcr_category_id');
            echo $this->Form->input('wtcr_manufacturer_id');
            echo $this->Form->input('manufacturer_sku');
            echo $this->Form->input('wtcr_vendor_id', ['options' => $wtcrVendors, 'empty' => true]);
            echo $this->Form->input('vendor_sku');
            echo $this->Form->input('vendor_price');
            echo $this->Form->input('received_date');
            echo $this->Form->input('markup');
            echo $this->Form->input('serial_numbers');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
