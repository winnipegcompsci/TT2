<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventory Entity.
 */
class Inventory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'wtcr_sku' => true,
        'name' => true,
        'wtcr_category_id' => true,
        'wtcr_manufacturer_id' => true,
        'manufacturer_sku' => true,
        'wtcr_vendor_id' => true,
        'vendor_sku' => true,
        'vendor_price' => true,
        'received_date' => true,
        'markup' => true,
        'serial_numbers' => true,
        'wtcr_category' => true,
        'wtcr_manufacturer' => true,
        'wtcr_vendor' => true,
    ];
}
