<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrOrderStatus Entity.
 */
class WtcrOrderStatus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'status_name' => true,
        'wtcr_orders' => true,
    ];
}
