<?php
namespace App\Model\Table;

use App\Model\Entity\Ticket;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Contacts
 * @property \Cake\ORM\Association\BelongsTo $TicketTypes
 * @property \Cake\ORM\Association\BelongsTo $ServiceTypes
 * @property \Cake\ORM\Association\BelongsTo $TicketPriorities
 * @property \Cake\ORM\Association\BelongsTo $TicketStatuses
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $CustomerSites
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $BillingStatuses
 * @property \Cake\ORM\Association\BelongsTo $Quotes
 * @property \Cake\ORM\Association\HasMany $TicketEvents
 * @property \Cake\ORM\Association\HasMany $TicketHistory
 */
class TicketsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tickets');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TicketTypes', [
            'foreignKey' => 'ticket_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ServiceTypes', [
            'foreignKey' => 'service_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TicketPriorities', [
            'foreignKey' => 'ticket_priority_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TicketStatuses', [
            'foreignKey' => 'ticket_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CustomerSites', [
            'foreignKey' => 'customer_site_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BillingStatuses', [
            'foreignKey' => 'billing_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Quotes', [
            'foreignKey' => 'quote_id'
        ]);
        $this->hasMany('TicketEvents', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->hasMany('TicketHistory', [
            'foreignKey' => 'ticket_id'
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
            ->add('date_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_created', 'create')
            ->notEmpty('date_created');
            
        $validator
            ->requirePresence('problem_description', 'create')
            ->notEmpty('problem_description');
            
        $validator
            ->requirePresence('solution', 'create')
            ->notEmpty('solution');
            
        $validator
            ->add('dis', 'valid', ['rule' => 'datetime'])
            ->requirePresence('dis', 'create')
            ->notEmpty('dis');
            
        $validator
            ->add('completion', 'valid', ['rule' => 'numeric'])
            ->requirePresence('completion', 'create')
            ->notEmpty('completion');

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
        // $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        // $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        // $rules->add($rules->existsIn(['ticket_type_id'], 'TicketTypes'));
        // $rules->add($rules->existsIn(['service_type_id'], 'ServiceTypes'));
        // $rules->add($rules->existsIn(['ticket_priority_id'], 'TicketPriorities'));
        // $rules->add($rules->existsIn(['ticket_status_id'], 'TicketStatuses'));
        // $rules->add($rules->existsIn(['user_id'], 'Users'));
        // $rules->add($rules->existsIn(['customer_site_id'], 'CustomerSites'));
        // $rules->add($rules->existsIn(['project_id'], 'Projects'));
        // $rules->add($rules->existsIn(['billing_status_id'], 'BillingStatuses'));
        // $rules->add($rules->existsIn(['quote_id'], 'Quotes'));
        return $rules;
    }
}
