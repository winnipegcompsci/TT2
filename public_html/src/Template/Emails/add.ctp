<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Email Types'), ['controller' => 'EmailTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email Type'), ['controller' => 'EmailTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="emails form large-10 medium-9 columns">
    <?= $this->Form->create($email) ?>
    <fieldset>
        <legend><?= __('Add Email') ?></legend>
        <?php
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('string');
            echo $this->Form->input('email_type_id', ['options' => $emailTypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
