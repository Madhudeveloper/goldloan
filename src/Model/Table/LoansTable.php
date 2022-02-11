<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Loans Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\SchemesTable&\Cake\ORM\Association\BelongsTo $Schemes
 * @property \App\Model\Table\LoanItemsTable&\Cake\ORM\Association\HasMany $LoanItems
 *
 * @method \App\Model\Entity\Loan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Loan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Loan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Loan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Loan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Loan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Loan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Loan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LoansTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('loans');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Schemes', [
            'foreignKey' => 'scheme_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('LoanItems', [
            'foreignKey' => 'loan_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('application_no')
            ->maxLength('application_no', 15)
            ->allowEmptyString('application_no');

        $validator
            ->date('processed_date')
            ->requirePresence('processed_date', 'create')
            ->notEmptyDate('processed_date');

        $validator
            ->integer('Amount')
            ->requirePresence('Amount', 'create')
            ->notEmptyString('Amount');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('interest')
            ->maxLength('interest', 255)
            ->requirePresence('interest', 'create')
            ->notEmptyString('interest');

        $validator
            ->numeric('tobepaid')
            ->requirePresence('tobepaid', 'create')
            ->notEmptyString('tobepaid');

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
        $rules->add($rules->existsIn(['scheme_id'], 'Schemes'));

        return $rules;
    }
}
