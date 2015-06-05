<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrCustomer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrCustomers Model
 *
 * @property \Cake\ORM\Association\HasMany $WtcrOrders
 */
class WtcrCustomersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_customers');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('WtcrOrders', [
            'foreignKey' => 'wtcr_customer_id'
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
            ->allowEmpty('username');
            
        $validator
            ->allowEmpty('first_name');
            
        $validator
            ->allowEmpty('last_name');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');
            
        $validator
            ->allowEmpty('address');
            
        $validator
            ->allowEmpty('postal_code');
            
        $validator
            ->allowEmpty('country');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
