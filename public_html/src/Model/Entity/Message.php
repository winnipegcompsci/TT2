<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity.
 */
class Message extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'from_user_id' => true,
        'to_user_id' => true,
        'timestamp' => true,
        'text' => true,
        'user' => true,
    ];
}
