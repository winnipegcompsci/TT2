<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NotificationType Entity.
 */
class NotificationType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'icon' => true,
        'notifications' => true,
    ];
}
