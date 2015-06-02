<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BillingPlan Entity.
 */
class BillingPlan extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'billing_plan_lines' => true,
        'customers' => true,
    ];
}
