<?php
namespace App\Model\Entity;
use Cake\ORM\TableRegistry;

use Cake\ORM\Entity;

/**
 * ProjectTask Entity.
 */
class ProjectTask extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'project_id' => true,
        'title' => true,
        'body' => true,
        'user_id' => true,
        'deadline' => true,
        'done' => true,
        'project' => true,
        'user' => true,
    ];
    
    public function getAssignedUserName() {
        $user = TableRegistry::get('Users')->findById($this->user_id)->first();
        
        if($user) {
            return $user->getFullName();
        } else {
            return "--Nobody--";
        }
    }
    
    public function getDeadline() {
        return $this->deadline;
    }
    
    public function getCountdown() {
        $now = strtotime('now');
        $dueDate = strtotime($this->deadline);
        
        $seconds = $dueDate - $now;
        
        $numdays = floor($seconds / 86400);
        $numhours = floor(($seconds % 86400) / 3600);
        $numminutes = floor((($seconds % 86400) % 3600) / 60);
        $numseconds = (($seconds % 86400) % 3600) % 60;
        
        return "$numdays days, $numhours hours, $numminutes minutes";
    }
}
