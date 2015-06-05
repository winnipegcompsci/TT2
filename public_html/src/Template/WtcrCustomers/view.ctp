<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wtcr Customer'), ['action' => 'edit', $wtcrCustomer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wtcr Customer'), ['action' => 'delete', $wtcrCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCustomer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wtcr Orders'), ['controller' => 'WtcrOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wtcr Order'), ['controller' => 'WtcrOrders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wtcrCustomers view col-lg-10 col-md-9 columns">
    <h2><?= h($wtcrCustomer->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($wtcrCustomer->username) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($wtcrCustomer->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($wtcrCustomer->last_name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($wtcrCustomer->email) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($wtcrCustomer->address) ?></p>
            <h6 class="subheader"><?= __('Postal Code') ?></h6>
            <p><?= h($wtcrCustomer->postal_code) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= h($wtcrCustomer->country) ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($wtcrCustomer->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related WtcrOrders') ?></h4>
    <?php if (!empty($wtcrCustomer->wtcr_orders)): ?>
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
        <?php foreach ($wtcrCustomer->wtcr_orders as $wtcrOrders): ?>
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
