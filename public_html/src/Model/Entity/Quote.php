<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quote Entity.
 */
class Quote extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'customer_id' => true,
        'quote_type_id' => true,
        'customer' => true,
        'quote_type' => true,
        'projects' => true,
        'tickets' => true,
    ];
}
