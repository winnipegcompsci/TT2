<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrProduct;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrProducts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $WtcrProductCategories
 */
class WtcrProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_products');
        $this->displayField('id');
        $this->primaryKey(['id', 'mfg_part_num']);
        $this->belongsTo('WtcrProductCategories', [
            'foreignKey' => 'wtcr_product_category_id'
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
            ->allowEmpty('mfg_part_num', 'create');
            
        $validator
            ->requirePresence('wtcrsku', 'create')
            ->notEmpty('wtcrsku');
            
        $validator
            ->allowEmpty('wtcr_product_name');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->add('autoupdate', 'valid', ['rule' => 'numeric'])
            ->requirePresence('autoupdate', 'create')
            ->notEmpty('autoupdate');
            
        $validator
            ->add('static_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('static_price');
            
        $validator
            ->add('suggestedmarkup', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('suggestedmarkup');
            
        $validator
            ->add('wtcrprice', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcrprice');
            
        $validator
            ->allowEmpty('wtcr_nid');
            
        $validator
            ->add('lastupdated', 'valid', ['rule' => 'datetime'])
            ->requirePresence('lastupdated', 'create')
            ->notEmpty('lastupdated');
            
        $validator
            ->allowEmpty('marketplace_data');
            
        $validator
            ->allowEmpty('pictures');
            
        $validator
            ->add('price_paid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('price_paid');

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
        $rules->add($rules->existsIn(['wtcr_product_category_id'], 'WtcrProductCategories'));
        return $rules;
    }
}
