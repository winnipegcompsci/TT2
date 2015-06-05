<?php 
use Cake\ORM\TableRegistry;

$ticketstatuses = TableRegistry::get('TicketStatuses')->find('list')->toArray();

$conditions = array();

if(isset($_GET['ticket_status_id']) && $_GET['ticket_status_id'] != 0) {
    $conditions[] = ['ticket_status_id' => $_GET['ticket_status_id']]; 
}




$tickets = TableRegistry::get('Tickets')->find('all', [
    'contain' => ['Customers', 'Contacts', 'TicketTypes', 'ServiceTypes', 'TicketPriorities', 'TicketStatuses', 'Users','CustomerSites', 'BillingStatuses', 'Quotes'],
    'conditions' => $conditions
]);

?>

<div class="row">
    <div class="columns col-lg-12">
        <div class="box box-warning box-solid">
        
            <div class="box-header with-border"> Report Filters </div>
                    
            <div class="box-body">
                <div class="columns col-lg-3 col-md-4">
                    <form class="form-horizontal" method="GET">
                        <fieldset>

                        <!-- Select Basic -->
                        <div class="control-group">
                          <label class="control-label" for="selectbasic">Select Ticket with Status of</label>
                          <div class="controls">
                            <select id="ticket_status_id" name="ticket_status_id" class="input-xlarge">
                                <option value=0>All Kinds</option>
                                <?php 
                                    foreach($ticketstatuses as $key => $stat) { echo "<option value=$key> $stat </option>"; }
                                ?>
                            </select>
                           </div>
                           
                          <label class="control-label" for="selectbasic">Show Tickets </label>
                          <div class="controls">
                            <select id="ticket_action" name="ticket_action" class="input-xlarge">
                                <option value='1'>Created between the dates of </option>
                                <option value='2'>Closed between the dates of </option>
                                <option value='3'>With Ticket Events between the dates of </option>
                            </select>
                           </div>
                           
                           <div class='input-group date' id='startdate'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            
                            <div class='input-group date' id='enddate'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            
                            <label class="control-label" for="selectbasic">Group Tickets by </label>
                            <div class="controls">
                            <select id="groupby" name="groupby" class="input-xlarge">
                                <option value='1'>Customer </option>
                                <option value='2'>Site </option>
                                <option value='3'>Project </option>
                            </select>
                           </div>
                           
                        </div>
                          <br />
                          <div class="controls">
                            <button id="submit" name="submit" class="btn btn-success">Generate Report</button>
                          </div>
                        </fieldset>
                    </form>
                </div>
                
                <div class="columns col-lg-3 col-md-4">
                    <div class="box box-danger columns col-lg-3">
                        <div class="box-header with-border">
                          <h3 class="box-title"># of Tickets by Ticket Status</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <div class="box-body chart-responsive">
                          <div class="chart" id="ticket-status-chart" style="height: 200px; position: relative;"></div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                
                <div class="columns col-lg-3 col-md-4">
                    <div class="box box-danger columns col-lg-3">
                        <div class="box-header with-border">
                          <h3 class="box-title"># of Tickets By Project</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <div class="box-body chart-responsive">
                          <div class="chart" id="ticket-projects-chart" style="height: 200px; position: relative;"></div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                
                <div class="columns col-lg-3 col-md-4">
                    <div class="box box-danger columns col-lg-3">
                        <div class="box-header with-border">
                          <h3 class="box-title"># of Tickets By Service Type</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <div class="box-body chart-responsive">
                          <div class="chart" id="ticket-servicetype-chart" style="height: 200px; position: relative;"></div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$ticket_statuses = array();
$ticket_projects = array();
$ticket_service_types = array();
?>


<div class="row">
    <div class="columns col-lg-8 col-md-7">
        <div class="box box-primary box-solid">
            <div class="box-header with-border"> Ticket Report </div>
            
            <div class="box-body">
                <table id="reports-table">
                    <thead>
                        <th>Ticket #</th>
                        <th>Customer</th>
                        <th>Project</th>
                        <th>Created</th>
                        <th>Site</th>
                        <th>Service Type</th>
                        <th>Problem Type</th>
                        <th>Status</th>
                        <th>Billing Units</th>
                        <th>Minutes</th>
                    </thead>
                    
                    <tbody>
                    <?php foreach($tickets as $ticket): ?>
                        <?php
                            if(isset($ticket_statuses[$ticket->getStatus()])) {
                                $ticket_statuses[$ticket->getStatus()]++;
                            } else {
                                $ticket_statuses[$ticket->getStatus()] = 1;
                            }
                            
                            if(isset($ticket_projects[$ticket->getProjectName()])) {
                                $ticket_projects[$ticket->getProjectName()]++;
                                
                            } else {
                                $ticket_projects[$ticket->getProjectName()] = 1;                        
                            }
                                                        
                            if(isset($ticket_service_types[$ticket->getServiceTypeName()])) {
                                $ticket_service_types[$ticket->getServiceTypeName()]++;
                            } else {
                                $ticket_service_types[$ticket->getServiceTypeName()] = 1;
                            }

                            if(isset($project_minutes[$ticket->getProjectName()])) {
                                $project_minutes[$ticket->getProjectName()] += $ticket->getMinutesUsed();
                            } else {
                                $project_minutes[$ticket->getProjectName()] = $ticket->getMinutesUsed();
                            }
                            
                            if(isset($ticket_customer_site[$ticket->getSiteName()])) {
                                $ticket_customer_site[$ticket->getSiteName()]++;
                            } else {
                                $ticket_customer_site[$ticket->getSiteName()] = 1;
                            }
                            
                            if(isset($ticket_customer[$ticket->customer->name])) {
                                $ticket_customer[$ticket->customer->name]++;
                            } else {
                                $ticket_customer[$ticket->customer->name] = 1;
                            }
                            
                        ?>
                    
                        <tr>
                            <td><?= $this->Html->link($ticket->getID(), ['controller' => 'Tickets', 'action' => 'view', $ticket->id]) ?></td>
                            <td><?= $this->Html->link($ticket->customer->name, ['controller' => 'Customers', 'action' => 'view', $ticket->customer_id]) ?></td>
                            <td><?= $this->Html->link($ticket->getProjectName(), ['controller' => 'Projects', 'action' => 'view', $ticket->project_id]) ?></td>
                            <td><?= $ticket->date_created ?></td>
                            <td><?= $ticket->getSiteName() ?></td>
                            <td><?= $ticket->getServiceTypeName() ?></td>
                            <td><?= $ticket->getTicketTypeName() ?></td>
                            <td><?= $ticket->getStatus() ?></td>
                            <td><?= ceil($ticket->getMinutesUsed() / 4) ?></td>
                            <td><?= $ticket->getMinutesUsed() ?></td> 
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>

    <div class="columns col-lg-4 col-md-5">
        <div class="box box-primary box-solid">
            <div class="box-header with-border"> Projects and Customer Details </div>
            
            <div class="box-body">
                <div class="box box-danger columns col-lg-3">
                    <div class="box-header with-border">
                      <h3 class="box-title">Minutes used for Customer Projects</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body chart-responsive">
                      <div class="chart" id="minutes-by-project-chart" style="height: 200px; position: relative;"></div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            
            <div class="box-body">
                <div class="box box-danger columns col-lg-3">
                    <div class="box-header with-border">
                      <h3 class="box-title">Tickets by Customer</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body chart-responsive">
                      <div class="chart" id="tickets-by-customer-chart" style="height: 200px; position: relative;"></div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            
            
            <div class="box-body">
                <div class="box box-danger columns col-lg-3">
                    <div class="box-header with-border">
                      <h3 class="box-title">Tickets by Customer Site</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body chart-responsive">
                      <div class="chart" id="tickets-by-site-chart" style="height: 200px; position: relative;"></div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div> 
    </div>
</div>

<?php
$this->Html->scriptStart(['block' => true]);
echo '
$("document").ready(function() {
var donut1 = new Morris.Donut({
      element: \'ticket-status-chart\',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [';

    foreach($ticket_statuses as $key => $status) {
        echo '{label: "' . $key . '", value: ' . $ticket_statuses[$key] . '},';
        echo "\n";
    }

echo  '],
      hideHover: \'auto\'
    });
    
    var donut2 = new Morris.Donut({
      element: \'ticket-projects-chart\',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [';
    
    foreach($ticket_projects as $key => $project) {
        echo '{label: "' . $key . '", value: ' . $ticket_projects[$key] . '}, ';
        echo "\n";
    }
 
echo '],
      hideHover: \'auto\'
    });
    
    var donut3 = new Morris.Donut({
      element: \'ticket-servicetype-chart\',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [';
    
    foreach($ticket_service_types as $key => $servicetype) {
        echo '{label: "' . $key . '", value: ' . $ticket_service_types[$key] . '}, ';
        echo "\n";
    }    
    
echo '],
      hideHover: \'auto\'
    });
    
    var donut4 = new Morris.Donut({
      element: \'minutes-by-project-chart\',
      resize: true,
      data: [';
    
    foreach($project_minutes as $key => $project) {
        echo '{label: "' . $key . '", value: ' . $project_minutes[$key] . '}, ';
        echo "\n";
    }        
echo '],
      hideHover: \'auto\'
    });
    
    var donut5 = new Morris.Donut({
      element: \'tickets-by-customer-chart\',
      resize: true,
      data: [';
    
    foreach($ticket_customer as $key => $customer) {
        echo '{label: "' . $key . '", value: ' . $ticket_customer[$key] . '}, ';
        echo "\n";
    }        
echo '],
      hideHover: \'auto\'
    });
    
    var donut6 = new Morris.Donut({
      element: \'tickets-by-site-chart\',
      resize: true,
      data: [';
    
    foreach($ticket_customer_site as $key => $site) {
        echo '{label: "' . $key . '", value: ' . $ticket_customer_site[$key] . '}, ';
        echo "\n";
    }        
echo '],
      hideHover: \'auto\'
    });
});';
$this->Html->scriptEnd();


$this->Html->scriptStart(['block' => true]);
echo "$(document).ready(function() {
    $('#reports-table').DataTable();
} );";
$this->Html->scriptEnd();
