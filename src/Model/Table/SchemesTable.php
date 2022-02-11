<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schemes Model
 *
 * @property \App\Model\Table\LoansTable&\Cake\ORM\Association\HasMany $Loans
 *
 * @method \App\Model\Entity\Scheme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scheme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Scheme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scheme|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scheme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scheme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scheme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scheme findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchemesTable extends Table
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

        $this->setTable('schemes');
        $this->setDisplayField('scheme_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Loans', [
            'foreignKey' => 'scheme_id',
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
            ->scalar('scheme_name')
            ->maxLength('scheme_name', 255)
            ->requirePresence('scheme_name', 'create')
            ->notEmptyString('scheme_name');

        $validator
            ->integer('ratepergram')
            ->requirePresence('ratepergram', 'create')
            ->notEmptyString('ratepergram');

        $validator
            ->integer('thirty')
            ->requirePresence('thirty', 'create')
            ->notEmptyString('thirty');

        $validator
            ->integer('sixty')
            ->requirePresence('sixty', 'create')
            ->notEmptyString('sixty');

        $validator
            ->integer('ninety')
            ->requirePresence('ninety', 'create')
            ->notEmptyString('ninety');

        $validator
            ->integer('onetwenty')
            ->requirePresence('onetwenty', 'create')
            ->notEmptyString('onetwenty');

        $validator
            ->integer('onefifty')
            ->requirePresence('onefifty', 'create')
            ->notEmptyString('onefifty');

        $validator
            ->integer('oneeighty')
            ->requirePresence('oneeighty', 'create')
            ->notEmptyString('oneeighty');

        return $validator;
    }
}
