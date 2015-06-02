<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BillingType Entity.
 */
class BillingType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'order' => true,
        'ticket_events' => true,
    ];
}
