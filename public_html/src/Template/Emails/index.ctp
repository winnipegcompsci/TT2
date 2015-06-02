<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Email Types'), ['controller' => 'EmailTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email Type'), ['controller' => 'EmailTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="emails index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('address_id') ?></th>
            <th><?= $this->Paginator->sort('string') ?></th>
            <th><?= $this->Paginator->sort('email_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($emails as $email): ?>
        <tr>
            <td><?= $this->Number->format($email->id) ?></td>
            <td>
                <?= $email->has('address') ? $this->Html->link($email->address->name, ['controller' => 'Addresses', 'action' => 'view', $email->address->id]) : '' ?>
            </td>
            <td><?= h($email->string) ?></td>
            <td>
                <?= $email->has('email_type') ? $this->Html->link($email->email_type->name, ['controller' => 'EmailTypes', 'action' => 'view', $email->email_type->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $email->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $email->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?>
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
