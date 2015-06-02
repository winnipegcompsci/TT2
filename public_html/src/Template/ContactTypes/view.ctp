<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contact Type'), ['action' => 'edit', $contactType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact Type'), ['action' => 'delete', $contactType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contactTypes view large-10 medium-9 columns">
    <h2><?= h($contactType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($contactType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contactType->id) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($contactType->order) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contacts') ?></h4>
    <?php if (!empty($contactType->contacts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Contact Type Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($contactType->contacts as $contacts): ?>
        <tr>
            <td><?= h($contacts->id) ?></td>
            <td><?= h($contacts->first_name) ?></td>
            <td><?= h($contacts->last_name) ?></td>
            <td><?= h($contacts->customer_id) ?></td>
            <td><?= h($contacts->address_id) ?></td>
            <td><?= h($contacts->contact_type_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
