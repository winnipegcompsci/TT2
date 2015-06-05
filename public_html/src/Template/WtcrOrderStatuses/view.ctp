<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Order Status'), ['action' => 'edit', $wtcrOrderStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Order Status'), ['action' => 'delete', $wtcrOrderStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrOrderStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Order Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Order Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrOrderStatuses view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrOrderStatus->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Status Name') ?></h6>
            <p><?= h($wtcrOrderStatus->status_name) ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrOrderStatus->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related WtcrOrders') ?></h4>
    <?php if (!empty($wtcrOrderStatus->wtcr_orders)): ?>
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
        <?php foreach ($wtcrOrderStatus->wtcr_orders as $wtcrOrders): ?>
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
