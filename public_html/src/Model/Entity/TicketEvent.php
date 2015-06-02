<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TicketEvent Entity.
 */
class TicketEvent extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ticket_id' => true,
        'ticket_event_type_id' => true,
        'description' => true,
        'user_id' => true,
        'timestamp' => true,
        'billing_type_id' => true,
        'time_type_id' => true,
        'time_taken' => true,
        'is_resolution' => true,
        'resolution_date' => true,
        'time_start' => true,
        'time_end' => true,
        'ticket' => true,
        'ticket_event_type' => true,
        'user' => true,
        'billing_type' => true,
        'time_type' => true,
    ];
}
