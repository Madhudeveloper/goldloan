<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerDocuments Model
 *
 * @method \App\Model\Entity\CustomerDocument get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerDocument newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerDocument[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerDocument|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerDocument saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerDocument patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerDocument[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerDocument findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerDocumentsTable extends Table
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

        $this->setTable('customer_documents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image');

        $validator
            ->scalar('no')
            ->maxLength('no', 255)
            ->allowEmptyString('no');

        $validator
            ->integer('customer_id')
        
            ->allowEmptyString('no');

        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        // $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
