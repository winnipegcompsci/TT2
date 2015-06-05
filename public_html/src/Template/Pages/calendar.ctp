<div class="columns col-lg-2 col-md-3">
    <div class="box box-solid">
    <div class="box-header with-border">
      <h4 class="box-title">Draggable Events</h4>
    </div>
    <div class="box-body">
      <div id="external-events">
        <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Payday</div>
        <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Project Task</div>
        <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Ticket Task</div>
        <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Information</div>
        <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Project Deadline</div>
        <div class="checkbox">
          <label for="drop-remove">
            <input type="checkbox" id="drop-remove">
            remove after drop
          </label>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="columns col-lg-10 col-md-9">
    <!-- Calendar -->
    <div id="calendar">
    
    </div>
</div>

<?php $this->Html->scriptStart(['block' => true]);
echo "$(document).ready(function() {
    var currentTime = new Date();
    
    var y = currentTime.getFullYear();
    var m = currentTime.getMonth() + 1;
    var d = currentTime.getDate();

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        weekends: false,
        contentHeight: 600,
        start: '9:00', // a start time (10am in this example),
        end: '18:00', // an end time (6pm in this example),
        fixedWeekCount: true,
        
        events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1),
          backgroundColor: \"#f56954\", //red
          borderColor: \"#f56954\" //red
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d - 5),
          end: new Date(y, m, d - 2),
          backgroundColor: \"#f39c12\", //yellow
          borderColor: \"#f39c12\" //yellow
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          backgroundColor: \"#0073b7\", //Blue
          borderColor: \"#0073b7\" //Blue
        },
      ],
    })

});";
echo $this->Html->scriptEnd(); ?>