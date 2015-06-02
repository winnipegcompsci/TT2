<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UserRoles
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\HasMany $CustomerNotes
 * @property \Cake\ORM\Association\HasMany $Messages
 * @property \Cake\ORM\Association\HasMany $ProjectTasks
 * @property \Cake\ORM\Association\HasMany $TicketEvents
 * @property \Cake\ORM\Association\HasMany $TicketHistory
 * @property \Cake\ORM\Association\HasMany $Tickets
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CustomerNotes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ProjectTasks', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TicketEvents', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TicketHistory', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
            
        $validator
            ->requirePresence('secretkey', 'create')
            ->notEmpty('secretkey');
            
        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');
            
        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');
            
        $validator
            ->requirePresence('disabled', 'create')
            ->notEmpty('disabled');
            
        $validator
            ->add('user_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('user_created', 'create')
            ->notEmpty('user_created');
            
        $validator
            ->requirePresence('session', 'create')
            ->notEmpty('session');
            
        $validator
            ->requirePresence('cookie', 'create')
            ->notEmpty('cookie');
            
        $validator
            ->requirePresence('ip', 'create')
            ->notEmpty('ip');
            
        $validator
            ->add('last_login', 'valid', ['rule' => 'datetime'])
            ->requirePresence('last_login', 'create')
            ->notEmpty('last_login');
            
        $validator
            ->requirePresence('company_name', 'create')
            ->notEmpty('company_name');
            
        $validator
            ->add('is_online', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('is_online');
            
        $validator
            ->allowEmpty('picture');

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
        $rules->add($rules->existsIn(['user_role_id'], 'UserRoles'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
