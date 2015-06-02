<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['controller' => 'BillingPlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['controller' => 'BillingPlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Notes'), ['controller' => 'CustomerNotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Note'), ['controller' => 'CustomerNotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Sites'), ['controller' => 'CustomerSites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers view col-lg-10 col-md-9 columns">
    <h2><?= h($customer->name) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($customer->name) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= $customer->has('address') ? $this->Html->link($customer->address->name, ['controller' => 'Addresses', 'action' => 'view', $customer->address->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Number') ?></h6>
            <p><?= h($customer->number) ?></p>
            <h6 class="subheader"><?= __('Billing Plan') ?></h6>
            <p><?= $customer->has('billing_plan') ? $this->Html->link($customer->billing_plan->name, ['controller' => 'BillingPlans', 'action' => 'view', $customer->billing_plan->id]) : '' ?></p>
        </div>
        <div class="col-lg-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($customer->id) ?></p>
            <h6 class="subheader"><?= __('Contact Id') ?></h6>
            <p><?= $this->Number->format($customer->contact_id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns col-lg-9">
            <h6 class="subheader"><?= __('Customer Notes Id') ?></h6>
            <?= $this->Text->autoParagraph(h($customer->customer_notes_id)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Contacts') ?></h4>
    <?php if (!empty($customer->contacts)): ?>
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
        <?php foreach ($customer->contacts as $contacts): ?>
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
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related CustomerNotes') ?></h4>
    <?php if (!empty($customer->customer_notes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Text') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th><?= __('Permission') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->customer_notes as $customerNotes): ?>
        <tr>
            <td><?= h($customerNotes->id) ?></td>
            <td><?= h($customerNotes->customer_id) ?></td>
            <td><?= h($customerNotes->user_id) ?></td>
            <td><?= h($customerNotes->title) ?></td>
            <td><?= h($customerNotes->text) ?></td>
            <td><?= h($customerNotes->timestamp) ?></td>
            <td><?= h($customerNotes->permission) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CustomerNotes', 'action' => 'view', $customerNotes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerNotes', 'action' => 'edit', $customerNotes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerNotes', 'action' => 'delete', $customerNotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerNotes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related CustomerSites') ?></h4>
    <?php if (!empty($customer->customer_sites)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Site Name') ?></th>
            <th><?= __('Disabled') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->customer_sites as $customerSites): ?>
        <tr>
            <td><?= h($customerSites->id) ?></td>
            <td><?= h($customerSites->customer_id) ?></td>
            <td><?= h($customerSites->site_name) ?></td>
            <td><?= h($customerSites->disabled) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CustomerSites', 'action' => 'view', $customerSites->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerSites', 'action' => 'edit', $customerSites->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerSites', 'action' => 'delete', $customerSites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerSites->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Quotes') ?></h4>
    <?php if (!empty($customer->quotes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Quote Type Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->quotes as $quotes): ?>
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
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Tickets') ?></h4>
    <?php if (!empty($customer->tickets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Contact Id') ?></th>
            <th><?= __('Ticket Type Id') ?></th>
            <th><?= __('Service Type Id') ?></th>
            <th><?= __('Ticket Priority Id') ?></th>
            <th><?= __('Problem Description') ?></th>
            <th><?= __('Solution') ?></th>
            <th><?= __('Ticket Status Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Dis') ?></th>
            <th><?= __('Customer Site Id') ?></th>
            <th><?= __('Project Id') ?></th>
            <th><?= __('Completion') ?></th>
            <th><?= __('Billing Status Id') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->tickets as $tickets): ?>
        <tr>
            <td><?= h($tickets->id) ?></td>
            <td><?= h($tickets->date_created) ?></td>
            <td><?= h($tickets->customer_id) ?></td>
            <td><?= h($tickets->contact_id) ?></td>
            <td><?= h($tickets->ticket_type_id) ?></td>
            <td><?= h($tickets->service_type_id) ?></td>
            <td><?= h($tickets->ticket_priority_id) ?></td>
            <td><?= h($tickets->problem_description) ?></td>
            <td><?= h($tickets->solution) ?></td>
            <td><?= h($tickets->ticket_status_id) ?></td>
            <td><?= h($tickets->user_id) ?></td>
            <td><?= h($tickets->dis) ?></td>
            <td><?= h($tickets->customer_site_id) ?></td>
            <td><?= h($tickets->project_id) ?></td>
            <td><?= h($tickets->completion) ?></td>
            <td><?= h($tickets->billing_status_id) ?></td>
            <td><?= h($tickets->quote_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column col-lg-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($customer->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Secretkey') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('User Role Id') ?></th>
            <th><?= __('Disabled') ?></th>
            <th><?= __('User Created') ?></th>
            <th><?= __('Session') ?></th>
            <th><?= __('Cookie') ?></th>
            <th><?= __('Ip') ?></th>
            <th><?= __('Last Login') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Company Name') ?></th>
            <th><?= __('Is Online') ?></th>
            <th><?= __('Picture') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->secretkey) ?></td>
            <td><?= h($users->first_name) ?></td>
            <td><?= h($users->last_name) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->user_role_id) ?></td>
            <td><?= h($users->disabled) ?></td>
            <td><?= h($users->user_created) ?></td>
            <td><?= h($users->session) ?></td>
            <td><?= h($users->cookie) ?></td>
            <td><?= h($users->ip) ?></td>
            <td><?= h($users->last_login) ?></td>
            <td><?= h($users->customer_id) ?></td>
            <td><?= h($users->company_name) ?></td>
            <td><?= h($users->is_online) ?></td>
            <td><?= h($users->picture) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
