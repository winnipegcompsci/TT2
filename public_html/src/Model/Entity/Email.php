<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Email Entity.
 */
class Email extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'address_id' => true,
        'string' => true,
        'is_primary' => true,
        'notify' => true,
        'email_type_id' => true,
        'address' => true,
        'email_type' => true,
    ];
}
