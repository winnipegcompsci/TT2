<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'secretkey' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'user_role_id' => true,
        'disabled' => true,
        'user_created' => true,
        'session' => true,
        'cookie' => true,
        'ip' => true,
        'last_login' => true,
        'customer_id' => true,
        'company_name' => true,
        'is_online' => true,
        'picture' => true,
        'user_role' => true,
        'customer' => true,
        'customer_notes' => true,
        'messages' => true,
        'project_tasks' => true,
        'ticket_events' => true,
        'ticket_history' => true,
        'tickets' => true,
    ];
    
        
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
    
    public function getMessages() {
        $messages = TableRegistry::get('Messages')->find('all', [
            'conditions' => ['to_user_id' => $this->id]
        ]);
        
        return $messages;
    }
    
    
    public function getFullName() {
        return $this->first_name . " " . $this->last_name;
    }
    
    public function getUserRole() {
        return TableRegistry::get('User_Roles')->findById($this->user_role_id)->first();
    }
    
    public function isOnline() {
        if($this->is_online == true) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function getTicketTimeBetween($startdate = null, $enddate = null) {
        
        $conditions = [
            'user_id' => $this->id,
        ];
        
        if(isset($startdate) && $startdate != "") {
            $conditions['timestamp >='] = $startdate;
        }
        if(isset($enddate) && $enddate != "") {
            $conditions['timestamp <='] = $enddate;
        }
        
        
        $events = TableRegistry::get('TicketEvents')->find('all', [
           'conditions' => $conditions
        ]);
        
        $totalTicketTime = 0;
        foreach($events as $event) {
            
        }
    }
    
    public function getProjectTimeBetween($startdate, $enddate) {
        
    }
    
    public function getTotalTimeBetween($startdate, $enddate) {
        
    }
    
    
}
