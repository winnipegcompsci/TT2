
 <!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3><?= $num_open_projects ?></h3>
      <p>Active Projects</p>
    </div>
    <div class="icon">
      <i class="ion ion-ios-list"></i>
    </div>
    <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3><?= $num_open_tickets ?><sup style="font-size: 20px"></sup></h3>
      <p>Open Support Tickets</p>
    </div>
    <div class="icon">
      <i class="ion ion-help-buoy"></i>
    </div>
    <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3><?= $num_customers_can_bill ?></h3>
      <p>Tickets are Ready to Bill</p>
    </div>
    <div class="icon">
      <i class="ion ion-social-usd"></i>
    </div>
    <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>35</h3>
      <p>Customer Inquiries This Week</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-stalker"></i>
    </div>
    <a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
</div><!-- /.row -->

<!-- My Activities Row -->
<div class="row">
    <section class="col-lg-7 connectedSortable">
    <?= $this->element('get_active_tickets', ['user_id' => $logged_in_id]); ?>    
    </section>
    
    <section class="col-lg-5 connectedSortable">
    <?= $this->element('get_active_project_tasks', ['user_id' => $logged_in_id]); ?>
    </section>
</div>
<!-- End of My Activities -->

<!-- Chat and Calendar -->
<div class="row">
    <section class="col-lg-5 connectedSortable">
    <?= $this->element('get_user_calendar', ['user_id' => $logged_in_id]); ?>
    </section>
    
    <section class="col-lg-7">
    <?= $this->element('get_dashboard_chat', ['user_id' => $logged_in_id]); ?>
    </section>
</div>
<!-- End of Chat and Calendar -->
