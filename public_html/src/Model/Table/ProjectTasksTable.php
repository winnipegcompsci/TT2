<?php
namespace App\Model\Table;

use App\Model\Entity\ProjectTask;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjectTasks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class ProjectTasksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('project_tasks');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id'
        ]);
        $this->belongsTo('Users', [
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
            ->allowEmpty('title');
            
        $validator
            ->allowEmpty('body');
            
        $validator
            ->add('deadline', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('deadline');
            
        $validator
            ->add('done', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('done');

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
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
