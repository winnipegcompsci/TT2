<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notification Entity.
 */
class Notification extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'message' => true,
        'notification_type_id' => true,
        'date_created' => true,
        'user_role_id' => true,
        'notification_type' => true,
        'user_role' => true,
    ];
}
