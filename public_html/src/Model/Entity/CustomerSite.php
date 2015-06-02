<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerSite Entity.
 */
class CustomerSite extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'site_name' => true,
        'disabled' => true,
        'customer' => true,
        'tickets' => true,
    ];
}
