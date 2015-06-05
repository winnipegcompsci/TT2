<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BillingStatus Entity.
 */
class BillingStatus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'billing_status' => true,
        'tickets' => true,
    ];
}
