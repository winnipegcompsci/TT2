<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServiceType Entity.
 */
class ServiceType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'order' => true,
        'tickets' => true,
    ];
}
