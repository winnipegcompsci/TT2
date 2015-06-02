<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity.
 */
class Address extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address' => true,
        'postal_code' => true,
        'city' => true,
        'province_id' => true,
        'country_id' => true,
        'fax' => true,
        'website' => true,
        'province' => true,
        'country' => true,
        'contacts' => true,
        'customers' => true,
        'emails' => true,
        'phone_numbers' => true,
    ];
}
