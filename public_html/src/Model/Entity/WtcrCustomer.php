<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrCustomer Entity.
 */
class WtcrCustomer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'address' => true,
        'postal_code' => true,
        'country' => true,
        'wtcr_orders' => true,
    ];
}
