<div class="box box-info box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Calendar</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div id='calendar'></div>
    </div><!-- /.box-body -->
</div>

<?php 

$this->Html->scriptStart(['block' => true]);
echo "$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        'weekends': false,
    })

});";
$this->Html->scriptEnd();