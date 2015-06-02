<?php
namespace App\Model\Table;

use App\Model\Entity\TicketHistory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TicketHistory Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class TicketHistoryTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ticket_history');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->add('date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date', 'create')
            ->notEmpty('date');
            
        $validator
            ->requirePresence('action', 'create')
            ->notEmpty('action');

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
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
