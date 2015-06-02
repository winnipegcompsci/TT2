<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Quote Type'), ['action' => 'edit', $quoteType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote Type'), ['action' => 'delete', $quoteType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quote Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quoteTypes view large-10 medium-9 columns">
    <h2><?= h($quoteType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($quoteType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($quoteType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Quotes') ?></h4>
    <?php if (!empty($quoteType->quotes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Quote Type Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($quoteType->quotes as $quotes): ?>
        <tr>
            <td><?= h($quotes->id) ?></td>
            <td><?= h($quotes->name) ?></td>
            <td><?= h($quotes->customer_id) ?></td>
            <td><?= h($quotes->quote_type_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Quotes', 'action' => 'view', $quotes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Quotes', 'action' => 'edit', $quotes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quotes', 'action' => 'delete', $quotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
