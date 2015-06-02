<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="countries view large-10 medium-9 columns">
    <h2><?= h($country->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($country->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($country->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Addresses') ?></h4>
    <?php if (!empty($country->addresses)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Postal Code') ?></th>
            <th><?= __('City') ?></th>
            <th><?= __('Province Id') ?></th>
            <th><?= __('Country Id') ?></th>
            <th><?= __('Fax') ?></th>
            <th><?= __('Website') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($country->addresses as $addresses): ?>
        <tr>
            <td><?= h($addresses->id) ?></td>
            <td><?= h($addresses->name) ?></td>
            <td><?= h($addresses->address) ?></td>
            <td><?= h($addresses->postal_code) ?></td>
            <td><?= h($addresses->city) ?></td>
            <td><?= h($addresses->province_id) ?></td>
            <td><?= h($addresses->country_id) ?></td>
            <td><?= h($addresses->fax) ?></td>
            <td><?= h($addresses->website) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Provinces') ?></h4>
    <?php if (!empty($country->provinces)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Country Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($country->provinces as $provinces): ?>
        <tr>
            <td><?= h($provinces->id) ?></td>
            <td><?= h($provinces->name) ?></td>
            <td><?= h($provinces->country_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Provinces', 'action' => 'view', $provinces->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Provinces', 'action' => 'edit', $provinces->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Provinces', 'action' => 'delete', $provinces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provinces->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
