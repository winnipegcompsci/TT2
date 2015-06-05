<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WtcrProductsFixture
 *
 */
class WtcrProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'A unique ID for the product', 'autoIncrement' => true, 'precision' => null],
        'mfg_part_num' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => 'Part # The Manufacturer Uses', 'precision' => null, 'fixed' => null],
        'wtcrsku' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => 'The SKU used by WTCR to identify the product', 'precision' => null, 'fixed' => null],
        'wtcr_product_category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => 'The category the product falls in', 'precision' => null, 'autoIncrement' => null],
        'wtcr_product_name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'A description of the product', 'precision' => null],
        'autoupdate' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '1 if Product Should Auto Update Price, 0 otherwise.', 'precision' => null, 'autoIncrement' => null],
        'static_price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'The Price Suggested based on Current Markup'],
        'suggestedmarkup' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0.5', 'comment' => 'The Suggested Markup Percentage for a Product'],
        'wtcrprice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'The Price WTCR Charges'],
        'wtcr_nid' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => 'The NID of the Product on WTCRs Website', 'precision' => null, 'fixed' => null],
        'lastupdated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'The date/time this product was last updated from supplier', 'precision' => null],
        'marketplace_data' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'pictures' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'price_paid' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'mfg_part_num'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'mfg_part_num_UNIQUE' => ['type' => 'unique', 'columns' => ['mfg_part_num'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'mfg_part_num' => 'f150a02a-b9a5-49bb-92c2-f2a400ec26fc',
            'wtcrsku' => 'Lorem ipsum dolor sit amet',
            'wtcr_product_category_id' => 1,
            'wtcr_product_name' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'autoupdate' => 1,
            'static_price' => 1,
            'suggestedmarkup' => 1,
            'wtcrprice' => 1,
            'wtcr_nid' => 'Lorem ip',
            'lastupdated' => '2015-06-04 15:08:48',
            'marketplace_data' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'pictures' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'price_paid' => 1
        ],
    ];
}
