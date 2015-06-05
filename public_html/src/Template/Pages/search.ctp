<?php 
use Cake\ORM\TableRegistry;

function contains($str, array $arr)
{
    foreach($arr as $a) {
        if (stripos($str,$a) !== false) return true;
    }
    return false;
}

?>

<div class="row heading-texts">
    <div class="columns col-lg-10 col-md-9">
    <?php
        if(isset($_GET['q']) && $_GET['q'] != "") {
            echo "<h2> Searching for <small>" . $_GET['q'] . "</small> in TT </h2>";
        } else {
            echo "<h2> Search for <small>" . "something" . "</small> in TT </h2>";
        } 
    ?>
    </div>
    
    <div class="columns col-lg-2 col-md-3">
        <form action="/tt2/public_html/pages/search" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
    </div>
</div>

<div class="row results-tickets">
    <?php
        $tickets = TableRegistry::get('Tickets')->find('all')->toArray();
        $projects = TableRegistry::get('Projects')->find('all')->toArray();
        $users = TableRegistry::get('Users')->find('all')->toArray();
        $customers = TableRegistry::get('Customers')->find('all')->toArray();
        
        $ticket_res = array();
        $project_res = array();
        $user_res = array();
        $customer_res = array();

        
    ?>
</div>

<div class="row results-projects">

</div>
