<?php
$tickets = $_TicketTable->find('all', [
    'conditions' => [
        'user_id' => $user_id,
        'ticket_status_id <>' => 2,
    ],
    'contains' => ['TicketStatuses', 'Customers'],
    'limit' => 10,
]);

?>


<div class="box box-danger box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Open Tickets Assigned to Me</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="myticketstable">
            <thead>
                <th>Customer</th>
                <th>Type</th>
                <th>Priority</th>     
                <th>Completion</th>
                <th>Time Used</th>
            </thead>

            <tbody>
            <?php 
                foreach($tickets as $ticket) : ?>
                    <tr>
                        <td><?= $ticket->getCustomerName() ?></td>
                        <td><?= $ticket->getTicketTypeName() ?></td>
                        <td><?= $ticket->getPriority() ?></td>
                        <td>
                            <div class="progress">
                                <?php
                                $className = "progress-bar-info";
                                if($ticket->completion < 60) {
                                    $className = "progress-bar-warning";
                                } 
                                if($ticket->completion < 60 && $ticket->completion < 30) {
                                    $className = "progress-bar-danger";
                                } else if ($ticket->completion >= 60) {
                                    $className = "progress-bar-success";
                                }
                                ?>
                                <div class="progress-bar progress-bar-primary progress-bar-striped <?= $className ?>" role="progressbar" aria-valuenow="<?= $this->Number->format($ticket->completion) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $this->Number->format($ticket->completion) ?>%">
                                    <span class="sr-only"><?= $this->Number->format($ticket->completion) ?> Complete </span>
                                    <?= $this->Number->format($ticket->completion) ?>% Complete
                                </div>
                            </div>
                        </td>
                        <td><?= $ticket->getMinutesUsed() ?></td>
                    </tr>
                    
                <?php endforeach; ?>        
            </tbody>
        </table>  
    </div><!-- /.box-body -->
</div>



<?php
$this->Html->scriptStart(['block' => true]);
echo "$(document).ready(function() {
    $('#myticketstable').DataTable( {
            \"pageLength\": 5,
            \"language\": {
                \"emptyTable\":     \"No Tickets are Currently assigned to you.\"
            }
    } );
});";
$this->Html->scriptEnd();
