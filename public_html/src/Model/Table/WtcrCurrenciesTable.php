<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrCurrency;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrCurrencies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $WtcrCurrencyProviders
 * @property \Cake\ORM\Association\HasMany $WtcrOrders
 */
class WtcrCurrenciesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_currencies');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('WtcrCurrencyProviders', [
            'foreignKey' => 'wtcr_currency_provider_id'
        ]);
        $this->hasMany('WtcrOrders', [
            'foreignKey' => 'wtcr_currency_id'
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
            ->allowEmpty('currency_name');
            
        $validator
            ->allowEmpty('abbreviation');

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
        $rules->add($rules->existsIn(['wtcr_currency_provider_id'], 'WtcrCurrencyProviders'));
        return $rules;
    }
}
