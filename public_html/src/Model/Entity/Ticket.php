<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


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
}
