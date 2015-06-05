<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrOrderStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrOrderStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Order Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrOrderStatuses form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrOrderStatus) ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Order Status') ?></legend>
        <?php
            echo $this->Form->input('status_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
