<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 */
class Project extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date_created' => true,
        'name' => true,
        'description' => true,
        'project_status_id' => true,
        'max_hours' => true,
        'quoted_hours' => true,
        'due_date' => true,
        'quote_id' => true,
        'project_status' => true,
        'quote' => true,
        'project_tasks' => true,
        'tickets' => true,
    ];
    
    public function getTimeRemaining() {
        $now = strtotime('now');
        $dueDate = strtotime($this->due_date);
        
        $seconds = $dueDate - $now;
        
        $numdays = floor($seconds / 86400);
        $numhours = floor(($seconds % 86400) / 3600);
        $numminutes = floor((($seconds % 86400) % 3600) / 60);
        $numseconds = (($seconds % 86400) % 3600) % 60;
        
        return "$numdays days, $numhours hours, $numminutes minutes";
    }
}
