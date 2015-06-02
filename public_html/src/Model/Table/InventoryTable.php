<?php
namespace App\Model\Table;

use App\Model\Entity\Inventory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inventory Model
 *
 * @property \Cake\ORM\Association\BelongsTo $WtcrCategories
 * @property \Cake\ORM\Association\BelongsTo $WtcrManufacturers
 * @property \Cake\ORM\Association\BelongsTo $WtcrVendors
 */
class InventoryTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('inventory');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('WtcrCategories', [
            'foreignKey' => 'wtcr_category_id'
        ]);
        $this->belongsTo('WtcrManufacturers', [
            'foreignKey' => 'wtcr_manufacturer_id'
        ]);
        $this->belongsTo('WtcrVendors', [
            'foreignKey' => 'wtcr_vendor_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('wtcr_sku');
            
        $validator
            ->allowEmpty('name');
            
        $validator
            ->allowEmpty('manufacturer_sku');
            
        $validator
            ->allowEmpty('vendor_sku');
            
        $validator
            ->add('vendor_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('vendor_price');
            
        $validator
            ->add('received_date', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('received_date');
            
        $validator
            ->add('markup', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('markup');
            
        $validator
            ->allowEmpty('serial_numbers');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['wtcr_category_id'], 'WtcrCategories'));
        $rules->add($rules->existsIn(['wtcr_manufacturer_id'], 'WtcrManufacturers'));
        $rules->add($rules->existsIn(['wtcr_vendor_id'], 'WtcrVendors'));
        return $rules;
    }
}
