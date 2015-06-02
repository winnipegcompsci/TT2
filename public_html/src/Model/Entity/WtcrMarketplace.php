<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WtcrMarketplace Entity.
 */
class WtcrMarketplace extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'marketplace_name' => true,
        'wtcr_marketplace_template_id' => true,
        'wtcr_marketplace_templates' => true,
    ];
}
