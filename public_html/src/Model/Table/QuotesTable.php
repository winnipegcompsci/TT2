<?php
namespace App\Model\Table;

use App\Model\Entity\Quote;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quotes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $QuoteTypes
 * @property \Cake\ORM\Association\HasMany $Projects
 * @property \Cake\ORM\Association\HasMany $Tickets
 */
class QuotesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('quotes');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('QuoteTypes', [
            'foreignKey' => 'quote_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'quote_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'quote_id'
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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['quote_type_id'], 'QuoteTypes'));
        return $rules;
    }
}
