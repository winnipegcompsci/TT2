<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Phone Number'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Types'), ['controller' => 'PhoneTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Type'), ['controller' => 'PhoneTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="phoneNumbers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('address_id') ?></th>
            <th><?= $this->Paginator->sort('phone_number') ?></th>
            <th><?= $this->Paginator->sort('ext') ?></th>
            <th><?= $this->Paginator->sort('phone_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($phoneNumbers as $phoneNumber): ?>
        <tr>
            <td><?= $this->Number->format($phoneNumber->id) ?></td>
            <td>
                <?= $phoneNumber->has('address') ? $this->Html->link($phoneNumber->address->name, ['controller' => 'Addresses', 'action' => 'view', $phoneNumber->address->id]) : '' ?>
            </td>
            <td><?= h($phoneNumber->phone_number) ?></td>
            <td><?= h($phoneNumber->ext) ?></td>
            <td>
                <?= $phoneNumber->has('phone_type') ? $this->Html->link($phoneNumber->phone_type->name, ['controller' => 'PhoneTypes', 'action' => 'view', $phoneNumber->phone_type->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $phoneNumber->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phoneNumber->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phoneNumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumber->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
