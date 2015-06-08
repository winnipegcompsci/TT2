<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 */
 use Cake\ORM\TableRegistry;
 
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
    
    public function getBootstrapClass() {
        // Return Success iff Finished
        // Return blue for primary
        // Return Warning if running out of time or unfinished tasks.
        // Return Danger if overdue.
    }
    
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
    
    public function getNumberOfTasks() {
        $numTasks = TableRegistry::get('ProjectTasks')->find('all', [
            'conditions' => ['project_id' => $this->id]
        ])->count();
        
        return $numTasks;
    }
    
    public function getNumberOfTasksDone() {
        $numTasks = TableRegistry::get('ProjectTasks')->find('all', [
            'conditions' => ['project_id' => $this->id, 'done' => true]
        ])->count();
        
        return $numTasks;
    }
    
    public function getUnfinishedTasks($limit = null) {
        
        if($limit == null) {
            $limit = 5;
        }
        
        $tasks = TableRegistry::get('ProjectTasks')->find('all', [
            'conditions' => ['project_id' => $this->id, 'done' => false],
            'limit' => $limit,
        ]);

        return $tasks;
    }
    
    public function getCurrentTime() {
        $tickets = TableRegistry::get('Tickets')->find('all', [
            'conditions' => ['project_id' => $this->id]
        ]);
        
        $timeTaken = 0;
        foreach($tickets as $ticket) {
            $timeTaken += $ticket->getMinutesUsed();
        }
        
        return $timeTaken / 60;
    }
    
    public function addTaskToProject() {
        
    }
}
