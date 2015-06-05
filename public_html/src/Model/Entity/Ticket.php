<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;


/**
 * Ticket Entity.
 */
class Ticket extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date_created' => true,
        'customer_id' => true,
        'contact_id' => true,
        'ticket_type_id' => true,
        'service_type_id' => true,
        'ticket_priority_id' => true,
        'problem_description' => true,
        'solution' => true,
        'ticket_status_id' => true,
        'user_id' => true,
        'dis' => true,
        'customer_site_id' => true,
        'project_id' => true,
        'completion' => true,
        'billing_status_id' => true,
        'quote_id' => true,
        'customer' => true,
        'contact' => true,
        'ticket_type' => true,
        'service_type' => true,
        'ticket_priority' => true,
        'ticket_status' => true,
        'user' => true,
        'customer_site' => true,
        'project' => true,
        'billing_status' => true,
        'quote' => true,
        'ticket_events' => true,
        'ticket_history' => true,
    ];
    
    public function getEvents() {
        $events = TableRegistry::get('TicketEvents')->find('all', [
            'conditions' => ['ticket_id' => $this->id],
            'contain' => ['Users']
        ]);
        
        return $events;
    }
    
    public function  getEventCount() {
        $events = TableRegistry::get('TicketEvents')->find('all', [
            'conditions' =>['ticket_id' => $this->id]
        ])->toArray()->count();
        
        return $events;
    }
    
    public function getMinutesUsed() {
        $min = 0;
        
        $events = TableRegistry::get('TicketEvents')->find('all', [
            'conditions' => ['ticket_id' => $this->id],
            'contain' => ['Users']
        ]);
        
        foreach($events as $event) { $min += $event->time_taken;}

        return $min;
    }
    
    public function getID() {
        
        return "#" . str_pad($this->id, 4, "0", STR_PAD_LEFT ); 
        
    }
    
    public function getProjectName() {
        
        if($this->project_id == 0) {
            return "N/A";
        } else {
            $project = TableRegistry::get('Projects')->find('all', [
                'conditions' => ['id' => $this->project_id]
            ])->first();
                        
            return $project->name;
        }
    }
    
    public function getSiteName() {
        $site = TableRegistry::get('CustomerSites')->find('all', [
            'conditions' => ['id' => $this->customer_site_id],
        ])->first();
        
        return $site->site_name;
    }
    
    public function getServiceTypeName() {
        $servicetype = TableRegistry::get('ServiceTypes')->find('all',  [
            'conditions' => ['id' => $this->service_type_id]
        ])->first();
        
        return $servicetype->name;
    }
    
    public function getTicketTypeName() {
        $ticketype = TableRegistry::get('TicketTypes')->find('all', [
            'conditions' => ['id' => $this->ticket_type_id]
        ])->first();
        
        return $ticketype->name;
    }
    
    public function getProblemTypeName() {
        $problemtype = TableRegistry::get('ProblemTypes')->find('all', [
            'conditions' => ['id' => $this->problem_type_id]
        ]);
    }
    
    public function getStatus() {
        $status = TableRegistry::get('TicketStatuses')->find('all', [
            'conditions' => ['id' => $this->ticket_status_id]
        ])->first();
        
        return $status->name;
    }
}
