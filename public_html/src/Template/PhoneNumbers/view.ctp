<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Phone Number'), ['action' => 'edit', $phoneNumber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone Number'), ['action' => 'delete', $phoneNumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phone Types'), ['controller' => 'PhoneTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Type'), ['controller' => 'PhoneTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phoneNumbers view large-10 medium-9 columns">
    <h2><?= h($phoneNumber->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= $phoneNumber->has('address') ? $this->Html->link($phoneNumber->address->name, ['controller' => 'Addresses', 'action' => 'view', $phoneNumber->address->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Phone Number') ?></h6>
            <p><?= h($phoneNumber->phone_number) ?></p>
            <h6 class="subheader"><?= __('Ext') ?></h6>
            <p><?= h($phoneNumber->ext) ?></p>
            <h6 class="subheader"><?= __('Phone Type') ?></h6>
            <p><?= $phoneNumber->has('phone_type') ? $this->Html->link($phoneNumber->phone_type->name, ['controller' => 'PhoneTypes', 'action' => 'view', $phoneNumber->phone_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($phoneNumber->id) ?></p>
        </div>
    </div>
</div>
