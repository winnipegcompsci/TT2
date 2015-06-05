<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrCurrencies index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('currency_name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_currency_provider_id') ?></th>
            <th><?= $this->Paginator->sort('abbreviation') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrCurrencies as $wtcrCurrency): ?>
        <tr>
            <td><?= $this->Number->format($wtcrCurrency->id) ?></td>
            <td><?= h($wtcrCurrency->currency_name) ?></td>
            <td><?= $this->Number->format($wtcrCurrency->wtcr_currency_provider_id) ?></td>
            <td><?= h($wtcrCurrency->abbreviation) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCurrency->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCurrency->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCurrency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrency->id)]) ?>
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
