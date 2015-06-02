<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Phone Type'), ['action' => 'edit', $phoneType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone Type'), ['action' => 'delete', $phoneType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phoneTypes view large-10 medium-9 columns">
    <h2><?= h($phoneType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($phoneType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($phoneType->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($phoneType->order) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PhoneNumbers') ?></h4>
    <?php if (!empty($phoneType->phone_numbers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Phone Number') ?></th>
            <th><?= __('Ext') ?></th>
            <th><?= __('Phone Type Id') ?></th>
            <th><?= __('Phone Is Primary') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($phoneType->phone_numbers as $phoneNumbers): ?>
        <tr>
            <td><?= h($phoneNumbers->id) ?></td>
            <td><?= h($phoneNumbers->address_id) ?></td>
            <td><?= h($phoneNumbers->phone_number) ?></td>
            <td><?= h($phoneNumbers->ext) ?></td>
            <td><?= h($phoneNumbers->phone_type_id) ?></td>
            <td><?= h($phoneNumbers->phone_is_primary) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PhoneNumbers', 'action' => 'view', $phoneNumbers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PhoneNumbers', 'action' => 'edit', $phoneNumbers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PhoneNumbers', 'action' => 'delete', $phoneNumbers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumbers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
