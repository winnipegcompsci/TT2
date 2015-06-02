<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Service Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="serviceTypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('order') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($serviceTypes as $serviceType): ?>
        <tr>
            <td><?= $this->Number->format($serviceType->id) ?></td>
            <td><?= h($serviceType->name) ?></td>
            <td><?= $this->Number->format($serviceType->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $serviceType->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceType->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->id)]) ?>
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
