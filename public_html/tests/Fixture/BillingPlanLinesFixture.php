<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BillingPlanLinesFixture
 *
 */
class BillingPlanLinesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'billing_plan_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'time_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'minutes_per_unit' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'min_num_unit' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'min_unit' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'round_up_at_min' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'emerg_minutes_per_unit' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'emerg_min_num_units' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'emerg_min_unit' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'emerg_round_up_at_min' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'line_plan_id' => ['type' => 'index', 'columns' => ['billing_plan_id'], 'length' => []],
            'line_time_type_id' => ['type' => 'index', 'columns' => ['time_type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'billing_plan_lines_ibfk_1' => ['type' => 'foreign', 'columns' => ['billing_plan_id'], 'references' => ['billing_plans', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'billing_plan_lines_ibfk_2' => ['type' => 'foreign', 'columns' => ['time_type_id'], 'references' => ['time_types', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'billing_plan_id' => 1,
            'time_type_id' => 1,
            'minutes_per_unit' => 1,
            'min_num_unit' => 1,
            'min_unit' => 1,
            'round_up_at_min' => 1,
            'emerg_minutes_per_unit' => 1,
            'emerg_min_num_units' => 1,
            'emerg_min_unit' => 1,
            'emerg_round_up_at_min' => 1
        ],
    ];
}
