<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRole Entity.
 */
class UserRole extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'order' => true,
        'notifications' => true,
        'users' => true,
    ];
}
