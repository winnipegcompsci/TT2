<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wtcr Marketplace'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Marketplace Templates'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Marketplace Template'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrMarketplaces index col-lg-10 col-md-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('marketplace_name') ?></th>
            <th><?= $this->Paginator->sort('wtcr_marketplace_template_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wtcrMarketplaces as $wtcrMarketplace): ?>
        <tr>
            <td><?= $this->Number->format($wtcrMarketplace->id) ?></td>
            <td><?= h($wtcrMarketplace->marketplace_name) ?></td>
            <td><?= $this->Number->format($wtcrMarketplace->wtcr_marketplace_template_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrMarketplace->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrMarketplace->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrMarketplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrMarketplace->id)]) ?>
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
