<?php 
use Cake\ORM\TableRegistry;

$employees = TableRegistry::get('Users')->find('all');

if(array_key_exists('startdate', $_GET)) {
    $startdate = $_GET['startdate'];
    
}
if(array_key_exists('enddate', $_GET)) {
    $enddate = $_GET['enddate'];
}

if(!isset($startdate) || $startdate == "") {
    $startdate =  date("Y-m-d H:i:s", strtotime('-30 days', strtotime('now')));
    $enddate = date("Y-m-d H:i:s", strtotime('-1 days', strtotime('now')));
}

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
                          <label class="control-label" for="selectbasic">Generate Report for </label>
                          <div class="controls">
                            <select id="ticket_status_id" name="ticket_status_id" class="input-xlarge">
                                <option value=0>All Employees</option>
                                <?php 
                                    foreach($employees as $key => $user) { echo "<option value=$key> " . $user->getFullName() .  " </option>"; }
                                ?>
                            </select>
                           </div>
                           
                          <label class="control-label" for="selectbasic">Show Time Logged Between</label>                           
                           <div class='input-group date' id='startdate'>
                                <input type='text' placeholder='<?= $startdate ?>' class="form-control" />
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
                          <h3 class="box-title">EMPLOYEE CHART HERE</h3>
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
                          <h3 class="box-title">EMPLOYEE CHART HERE</h3>
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
                          <h3 class="box-title">EMPLOYEE CHART HERE</h3>
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
            <div class="box-header with-border"> Employee Report </div>
            
            <div class="box-body">
                <table id="reports-table">
                    <thead>
                        <th>Employee</th>
                        <th>Time Spent On Tickets</th>
                        <th>Time Spent on Projects</th>
                        <th>Total Time Spent</th>
                    </thead>
                    
                    <tbody>
                    <?php foreach($employees as $employee): ?>
                   
                        <tr>
                            <td> <?= $employee->getFullName(); ?></td>
                            <td> <?= $employee->getTicketTimeBetween($startdate, $enddate); ?> </td>
                            <td> <?= $employee->getProjectTimeBetween($startdate, $enddate); ?> </td>
                            <td> <?= $employee->getTotalTimeBetween($startdate, $enddate); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>

    <div class="columns col-lg-4 col-md-5">
        <div class="box box-primary box-solid">
            <div class="box-header with-border"> Other Details </div>
            
            <div class="box-body">
                <div class="box box-danger columns col-lg-3">
                    <div class="box-header with-border">
                      <h3 class="box-title">Employee Time Spent on Customer Projects</h3>
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
                      <h3 class="box-title">Employee Time Spent on Customer Support Tickets</h3>
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
                      <h3 class="box-title">Employee Time by Customer Site</h3>
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
