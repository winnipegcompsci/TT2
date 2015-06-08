<?php
use Cake\ORM\TableRegistry;

// $projects = TableRegistry::get('Projects', [
    // 'conditions' => ['project_status_id' => '0']
// ]);    

$projs = $_ProjectTable->find('all', [
    'contains' => ['ProjectTasks'],
    'conditions' => ['project_status_id' => 0 ],
    'limit' => 5,
]);


?>


<div class="box box-warning box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Project Tasks Assigned to Me</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="myprojectstable">
            <thead>
                <th>Project</th>
                <th>Project Due Date</th>     
                <th>My Task</th>
                <th>Task Deadline</th>
            </thead>

            <tbody>
            <?php 
                foreach($projs as $proj) {
                    foreach($proj->getUnfinishedTasks(5) as $task) { 
                        if($task->user_id == $user_id) {
                        ?>
                        <tr>
                            <td><?= $proj->name ?></td>
                            <td><?= $proj->getTimeRemaining() ?></td>
                            <td><?= $task->title?></td>
                            <td><?= $task->getCountdown() ?></td>
                        </tr>
                    <?php }
                    }
                }
            ?>        
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div>



<?php
$this->Html->scriptStart(['block' => true]);
echo "$(document).ready(function() {
    $('#myprojectstable').DataTable( {
            \"pageLength\": 5,
            \"language\": {
            \"emptyTable\":     \"No Project Tasks are Currently assigned to you.\",
        }
    } );
});";
$this->Html->scriptEnd();
