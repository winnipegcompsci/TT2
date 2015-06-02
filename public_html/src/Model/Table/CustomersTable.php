<?php
namespace App\Model\Table;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Addresses
 * @property \Cake\ORM\Association\BelongsTo $Contacts
 * @property \Cake\ORM\Association\BelongsTo $BillingPlans
 * @property \Cake\ORM\Association\BelongsTo $CustomerNotes
 * @property \Cake\ORM\Association\HasMany $Contacts
 * @property \Cake\ORM\Association\HasMany $CustomerNotes
 * @property \Cake\ORM\Association\HasMany $CustomerSites
 * @property \Cake\ORM\Association\HasMany $Quotes
 * @property \Cake\ORM\Association\HasMany $Tickets
 * @property \Cake\ORM\Association\HasMany $Users
 */
class CustomersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BillingPlans', [
            'foreignKey' => 'billing_plan_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CustomerNotes', [
            'foreignKey' => 'customer_notes_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerNotes', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('CustomerSites', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Quotes', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'customer_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('number', 'create')
            ->notEmpty('number');
            
        $validator
            ->requirePresence('disabled', 'create')
            ->notEmpty('disabled');

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
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['billing_plan_id'], 'BillingPlans'));
        $rules->add($rules->existsIn(['customer_notes_id'], 'CustomerNotes'));
        return $rules;
    }
}
