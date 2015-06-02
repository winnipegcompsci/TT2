<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity.
 */
class Contact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'customer_id' => true,
        'address_id' => true,
        'contact_type_id' => true,
        'customers' => true,
        'address' => true,
        'contact_type' => true,
        'tickets' => true,
    ];
}
