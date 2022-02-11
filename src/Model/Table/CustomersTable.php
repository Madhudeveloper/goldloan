<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\CustomerDocumentsTable&\Cake\ORM\Association\HasMany $CustomerDocuments
 * @property \App\Model\Table\LoansTable&\Cake\ORM\Association\HasMany $Loans
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CustomerDocuments', [
            'foreignKey' => 'customer_id',
        ]);
        $this->hasMany('Loans', [
            'foreignKey' => 'customer_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('fosname')
            ->maxLength('fosname', 255)
            ->requirePresence('fosname', 'create')
            ->notEmptyString('fosname');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 20)
            ->allowEmptyString('gender');

        $validator
            ->date('dob')
            ->allowEmptyDate('dob');

        $validator
            ->scalar('aadhar')
            ->maxLength('aadhar', 255)
            ->requirePresence('aadhar', 'create')
            ->notEmptyString('aadhar')
            ->add('aadhar', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('mobileone')
            ->maxLength('mobileone', 255)
            ->allowEmptyString('mobileone');

        $validator
            ->scalar('mobiletwo')
            ->maxLength('mobiletwo', 255)
            ->requirePresence('mobiletwo', 'create')
            ->notEmptyString('mobiletwo');

        $validator
            ->scalar('doorno')
            ->maxLength('doorno', 255)
            ->requirePresence('doorno', 'create')
            ->notEmptyString('doorno');

        $validator
            ->scalar('street')
            ->maxLength('street', 255)
            ->requirePresence('street', 'create')
            ->notEmptyString('street');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('pincode')
            ->maxLength('pincode', 255)
            ->requirePresence('pincode', 'create')
            ->notEmptyString('pincode');

        $validator
            ->scalar('landmark')
            ->maxLength('landmark', 255)
            ->requirePresence('landmark', 'create')
            ->notEmptyString('landmark');

        $validator
            ->scalar('introducer')
            ->maxLength('introducer', 255)
            ->requirePresence('introducer', 'create')
            ->notEmptyString('introducer');

        $validator
            ->scalar('intromobile')
            ->maxLength('intromobile', 255)
            ->requirePresence('intromobile', 'create')
            ->notEmptyString('intromobile');

        $validator
            ->scalar('profile')
            ->maxLength('profile', 255)
            ->requirePresence('profile', 'create')
            ->notEmptyFile('profile');

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
        $rules->add($rules->isUnique(['aadhar']));

        return $rules;
    }
}
