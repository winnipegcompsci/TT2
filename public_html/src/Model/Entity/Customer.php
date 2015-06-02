<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity.
 */
class Customer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address_id' => true,
        'contact_id' => true,
        'number' => true,
        'disabled' => true,
        'billing_plan_id' => true,
        'customer_notes_id' => true,
        'address' => true,
        'contacts' => true,
        'billing_plan' => true,
        'customer_notes' => true,
        'customer_sites' => true,
        'quotes' => true,
        'tickets' => true,
        'users' => true,
    ];
}
