<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ticket Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="ticketTypes index large-10 medium-9 columns">
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
    <?php foreach ($ticketTypes as $ticketType): ?>
        <tr>
            <td><?= $this->Number->format($ticketType->id) ?></td>
            <td><?= h($ticketType->name) ?></td>
            <td><?= $this->Number->format($ticketType->order) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticketType->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketType->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketType->id)]) ?>
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
