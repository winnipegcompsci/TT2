<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuoteType Entity.
 */
class QuoteType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'quotes' => true,
    ];
}
