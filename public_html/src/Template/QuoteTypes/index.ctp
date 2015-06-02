<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Quote Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="quoteTypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($quoteTypes as $quoteType): ?>
        <tr>
            <td><?= $this->Number->format($quoteType->id) ?></td>
            <td><?= h($quoteType->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $quoteType->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteType->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteType->id)]) ?>
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
