<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ticket History'), ['action' => 'edit', $ticketHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket History'), ['action' => 'delete', $ticketHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ticketHistory view large-10 medium-9 columns">
    <h2><?= h($ticketHistory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Ticket') ?></h6>
            <p><?= $ticketHistory->has('ticket') ? $this->Html->link($ticketHistory->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $ticketHistory->ticket->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $ticketHistory->has('user') ? $this->Html->link($ticketHistory->user->id, ['controller' => 'Users', 'action' => 'view', $ticketHistory->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ticketHistory->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($ticketHistory->date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Action') ?></h6>
            <?= $this->Text->autoParagraph(h($ticketHistory->action)) ?>
        </div>
    </div>
</div>
