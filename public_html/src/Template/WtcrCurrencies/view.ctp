<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Currency'), ['action' => 'edit', $wtcrCurrency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Currency'), ['action' => 'delete', $wtcrCurrency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCurrency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Currencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Currency'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCurrencies view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrCurrency->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Currency Name') ?></h6>
            <p><?= h($wtcrCurrency->currency_name) ?></p>
            <h6 class="subheader"><?= __('Abbreviation') ?></h6>
            <p><?= h($wtcrCurrency->abbreviation) ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrency->id) ?></p>
            <h6 class="subheader"><?= __('Wtcr Currency Provider Id') ?></h6>
            <p><?= $this->Number->format($wtcrCurrency->wtcr_currency_provider_id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related WtcrOrders') ?></h4>
    <?php if (!empty($wtcrCurrency->wtcr_orders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Wtcr Customer Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Total') ?></th>
            <th><?= __('Wtcr Currency Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Wtcr Order Status Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($wtcrCurrency->wtcr_orders as $wtcrOrders): ?>
        <tr>
            <td><?= h($wtcrOrders->id) ?></td>
            <td><?= h($wtcrOrders->wtcr_customer_id) ?></td>
            <td><?= h($wtcrOrders->timestamp) ?></td>
            <td><?= h($wtcrOrders->total) ?></td>
            <td><?= h($wtcrOrders->wtcr_currency_id) ?></td>
            <td><?= h($wtcrOrders->user_id) ?></td>
            <td><?= h($wtcrOrders->wtcr_order_status_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'WtcrOrders', 'action' => 'view', $wtcrOrders->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'WtcrOrders', 'action' => 'edit', $wtcrOrders->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WtcrOrders', 'action' => 'delete', $wtcrOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrOrders->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
