<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wtcrProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrProduct->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wtcr Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wtcr Product Categories'), ['controller' => 'WtcrProductCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wtcr Product Category'), ['controller' => 'WtcrProductCategories', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="wtcrProducts form large-10 medium-9 columns">
    <?= $this->Form->create($wtcrProduct) ?>
    <fieldset>
        <legend><?= __('Edit Wtcr Product') ?></legend>
        <?php
            echo $this->Form->input('wtcrsku');
            echo $this->Form->input('wtcr_product_category_id', ['options' => $wtcrProductCategories, 'empty' => true]);
            echo $this->Form->input('wtcr_product_name');
            echo $this->Form->input('description');
            echo $this->Form->input('autoupdate');
            echo $this->Form->input('static_price');
            echo $this->Form->input('suggestedmarkup');
            echo $this->Form->input('wtcrprice');
            echo $this->Form->input('wtcr_nid');
            echo $this->Form->input('lastupdated');
            echo $this->Form->input('marketplace_data');
            echo $this->Form->input('pictures');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
