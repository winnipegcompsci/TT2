<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Email Type'), ['action' => 'edit', $emailType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email Type'), ['action' => 'delete', $emailType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Email Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emailTypes view large-10 medium-9 columns">
    <h2><?= h($emailType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($emailType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($emailType->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($emailType->order) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Emails') ?></h4>
    <?php if (!empty($emailType->emails)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('String') ?></th>
            <th><?= __('Is Primary') ?></th>
            <th><?= __('Notify') ?></th>
            <th><?= __('Email Type Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($emailType->emails as $emails): ?>
        <tr>
            <td><?= h($emails->id) ?></td>
            <td><?= h($emails->address_id) ?></td>
            <td><?= h($emails->string) ?></td>
            <td><?= h($emails->is_primary) ?></td>
            <td><?= h($emails->notify) ?></td>
            <td><?= h($emails->email_type_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
