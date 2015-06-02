<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="addresses view large-10 medium-9 columns">
    <h2><?= h($address->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($address->name) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($address->address) ?></p>
            <h6 class="subheader"><?= __('Postal Code') ?></h6>
            <p><?= h($address->postal_code) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($address->city) ?></p>
            <h6 class="subheader"><?= __('Province') ?></h6>
            <p><?= $address->has('province') ? $this->Html->link($address->province->name, ['controller' => 'Provinces', 'action' => 'view', $address->province->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $address->has('country') ? $this->Html->link($address->country->name, ['controller' => 'Countries', 'action' => 'view', $address->country->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Fax') ?></h6>
            <p><?= h($address->fax) ?></p>
            <h6 class="subheader"><?= __('Website') ?></h6>
            <p><?= h($address->website) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($address->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contacts') ?></h4>
    <?php if (!empty($address->contacts)): ?>
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
        <?php foreach ($address->contacts as $contacts): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Customers') ?></h4>
    <?php if (!empty($address->customers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Number') ?></th>
            <th><?= __('Disabled') ?></th>
            <th><?= __('Billing Plan Id') ?></th>
            <th><?= __('Customer Notes Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($address->customers as $customers): ?>
        <tr>
            <td><?= h($customers->id) ?></td>
            <td><?= h($customers->name) ?></td>
            <td><?= h($customers->address_id) ?></td>
            <td><?= h($customers->contact_id) ?></td>
            <td><?= h($customers->number) ?></td>
            <td><?= h($customers->disabled) ?></td>
            <td><?= h($customers->billing_plan_id) ?></td>
            <td><?= h($customers->customer_notes_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Emails') ?></h4>
    <?php if (!empty($address->emails)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('String') ?></th>
            <th><?= __('Is Primary') ?></th>
            <th><?= __('Notify') ?></th>
            <th><?= __('Email Type Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($address->emails as $emails): ?>
        <tr>
            <td><?= h($emails->id) ?></td>
            <td><?= h($emails->address_id) ?></td>
            <td><?= h($emails->string) ?></td>
            <td><?= h($emails->is_primary) ?></td>
            <td><?= h($emails->notify) ?></td>
            <td><?= h($emails->email_type_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PhoneNumbers') ?></h4>
    <?php if (!empty($address->phone_numbers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Phone Number') ?></th>
            <th><?= __('Ext') ?></th>
            <th><?= __('Phone Type Id') ?></th>
            <th><?= __('Phone Is Primary') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($address->phone_numbers as $phoneNumbers): ?>
        <tr>
            <td><?= h($phoneNumbers->id) ?></td>
            <td><?= h($phoneNumbers->address_id) ?></td>
            <td><?= h($phoneNumbers->phone_number) ?></td>
            <td><?= h($phoneNumbers->ext) ?></td>
            <td><?= h($phoneNumbers->phone_type_id) ?></td>
            <td><?= h($phoneNumbers->phone_is_primary) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PhoneNumbers', 'action' => 'view', $phoneNumbers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PhoneNumbers', 'action' => 'edit', $phoneNumbers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PhoneNumbers', 'action' => 'delete', $phoneNumbers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumbers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
