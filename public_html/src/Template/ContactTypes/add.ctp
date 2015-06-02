<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contact Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="contactTypes form large-10 medium-9 columns">
    <?= $this->Form->create($contactType) ?>
    <fieldset>
        <legend><?= __('Add Contact Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
