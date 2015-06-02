<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emailType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emailType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Email Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="emailTypes form large-10 medium-9 columns">
    <?= $this->Form->create($emailType) ?>
    <fieldset>
        <legend><?= __('Edit Email Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
