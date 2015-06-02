<?php
namespace App\Model\Table;

use App\Model\Entity\BillingPlanLine;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BillingPlanLines Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BillingPlans
 * @property \Cake\ORM\Association\BelongsTo $TimeTypes
 */
class BillingPlanLinesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('billing_plan_lines');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('BillingPlans', [
            'foreignKey' => 'billing_plan_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TimeTypes', [
            'foreignKey' => 'time_type_id',
            'joinType' => 'INNER'
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
            ->add('minutes_per_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('minutes_per_unit', 'create')
            ->notEmpty('minutes_per_unit');
            
        $validator
            ->add('min_num_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('min_num_unit', 'create')
            ->notEmpty('min_num_unit');
            
        $validator
            ->add('min_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('min_unit', 'create')
            ->notEmpty('min_unit');
            
        $validator
            ->add('round_up_at_min', 'valid', ['rule' => 'numeric'])
            ->requirePresence('round_up_at_min', 'create')
            ->notEmpty('round_up_at_min');
            
        $validator
            ->add('emerg_minutes_per_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_minutes_per_unit', 'create')
            ->notEmpty('emerg_minutes_per_unit');
            
        $validator
            ->add('emerg_min_num_units', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_min_num_units', 'create')
            ->notEmpty('emerg_min_num_units');
            
        $validator
            ->add('emerg_min_unit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_min_unit', 'create')
            ->notEmpty('emerg_min_unit');
            
        $validator
            ->add('emerg_round_up_at_min', 'valid', ['rule' => 'numeric'])
            ->requirePresence('emerg_round_up_at_min', 'create')
            ->notEmpty('emerg_round_up_at_min');

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
        $rules->add($rules->existsIn(['billing_plan_id'], 'BillingPlans'));
        $rules->add($rules->existsIn(['time_type_id'], 'TimeTypes'));
        return $rules;
    }
}
