<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TicketHistory Entity.
 */
class TicketHistory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ticket_id' => true,
        'user_id' => true,
        'date' => true,
        'action' => true,
        'ticket' => true,
        'user' => true,
    ];
}
