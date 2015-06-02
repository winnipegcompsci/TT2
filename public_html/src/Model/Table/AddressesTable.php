<?php
namespace App\Model\Table;

use App\Model\Entity\Address;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addresses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Provinces
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\HasMany $Contacts
 * @property \Cake\ORM\Association\HasMany $Customers
 * @property \Cake\ORM\Association\HasMany $Emails
 * @property \Cake\ORM\Association\HasMany $PhoneNumbers
 */
class AddressesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('addresses');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'address_id'
        ]);
        $this->hasMany('PhoneNumbers', [
            'foreignKey' => 'address_id'
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
            ->requirePresence('address', 'create')
            ->notEmpty('address');
            
        $validator
            ->requirePresence('postal_code', 'create')
            ->notEmpty('postal_code');
            
        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');
            
        $validator
            ->allowEmpty('fax');
            
        $validator
            ->allowEmpty('website');

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
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        return $rules;
    }
}
