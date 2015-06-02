<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Marketplace'), ['action' => 'edit', $wtcrMarketplace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Marketplace'), ['action' => 'delete', $wtcrMarketplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrMarketplace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Marketplaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Marketplace'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Marketplace Templates'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Marketplace Template'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrMarketplaces view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrMarketplace->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Marketplace Name') ?></h6>
            <p><?= h($wtcrMarketplace->marketplace_name) ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrMarketplace->id) ?></p>
            <h6 class="subheader"><?= __('Wtcr Marketplace Template Id') ?></h6>
            <p><?= $this->Number->format($wtcrMarketplace->wtcr_marketplace_template_id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related WtcrMarketplaceTemplates') ?></h4>
    <?php if (!empty($wtcrMarketplace->wtcr_marketplace_templates)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Wtcr Marketplace Id') ?></th>
            <th><?= __('Template Data') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrMarketplace->wtcr_marketplace_templates as $wtcrMarketplaceTemplates): ?>
        <tr>
            <td><?= h($wtcrMarketplaceTemplates->id) ?></td>
            <td><?= h($wtcrMarketplaceTemplates->wtcr_marketplace_id) ?></td>
            <td><?= h($wtcrMarketplaceTemplates->template_data) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'view', $wtcrMarketplaceTemplates->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'edit', $wtcrMarketplaceTemplates->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrMarketplaceTemplates', 'action' => 'delete', $wtcrMarketplaceTemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrMarketplaceTemplates->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
