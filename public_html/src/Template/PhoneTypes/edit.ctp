<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $phoneType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="phoneTypes form large-10 medium-9 columns">
    <?= $this->Form->create($phoneType) ?>
    <fieldset>
        <legend><?= __('Edit Phone Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
