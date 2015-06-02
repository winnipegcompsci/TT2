<?php
namespace App\Model\Table;

use App\Model\Entity\UserRole;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRoles Model
 *
 * @property \Cake\ORM\Association\HasMany $Notifications
 * @property \Cake\ORM\Association\HasMany $Users
 */
class UserRolesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('user_roles');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Notifications', [
            'foreignKey' => 'user_role_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'user_role_id'
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
            ->add('order', 'valid', ['rule' => 'numeric'])
            ->requirePresence('order', 'create')
            ->notEmpty('order');

        return $validator;
    }
}
