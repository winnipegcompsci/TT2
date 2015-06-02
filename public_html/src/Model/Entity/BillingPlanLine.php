<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BillingPlanLine Entity.
 */
class BillingPlanLine extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'billing_plan_id' => true,
        'time_type_id' => true,
        'minutes_per_unit' => true,
        'min_num_unit' => true,
        'min_unit' => true,
        'round_up_at_min' => true,
        'emerg_minutes_per_unit' => true,
        'emerg_min_num_units' => true,
        'emerg_min_unit' => true,
        'emerg_round_up_at_min' => true,
        'billing_plan' => true,
        'time_type' => true,
    ];
}
