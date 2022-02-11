<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Containers Model
 *
 * @property \App\Model\Table\LoanItemsTable&\Cake\ORM\Association\HasMany $LoanItems
 *
 * @method \App\Model\Entity\Container get($primaryKey, $options = [])
 * @method \App\Model\Entity\Container newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Container[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Container|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Container saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Container patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Container[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Container findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContainersTable extends Table
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

        $this->setTable('containers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('LoanItems', [
            'foreignKey' => 'container_id',
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
            ->scalar('container')
            ->maxLength('container', 11)
            ->requirePresence('container', 'create')
            ->notEmptyString('container');

        return $validator;
    }
}
