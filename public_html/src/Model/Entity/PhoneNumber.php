<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PhoneNumber Entity.
 */
class PhoneNumber extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'address_id' => true,
        'phone_number' => true,
        'ext' => true,
        'phone_type_id' => true,
        'phone_is_primary' => true,
        'address' => true,
        'phone_type' => true,
    ];
}
