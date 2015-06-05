<?php
namespace App\Model\Table;

use App\Model\Entity\BillingStatus;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BillingStatuses Model
 *
 * @property \Cake\ORM\Association\HasMany $Tickets
 */
class BillingStatusesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('billing_statuses');
        $this->displayField('billing_status');
        $this->primaryKey('id');
        $this->hasMany('Tickets', [
            'foreignKey' => 'billing_status_id'
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
            ->requirePresence('billing_status', 'create')
            ->notEmpty('billing_status');

        return $validator;
    }
}
