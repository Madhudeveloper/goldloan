<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DrawerAmounts Model
 *
 * @property \App\Model\Table\DrawersTable&\Cake\ORM\Association\BelongsTo $Drawers
 *
 * @method \App\Model\Entity\DrawerAmount get($primaryKey, $options = [])
 * @method \App\Model\Entity\DrawerAmount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DrawerAmount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DrawerAmount|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DrawerAmount saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DrawerAmount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DrawerAmount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DrawerAmount findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DrawerAmountsTable extends Table
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

        $this->setTable('drawer_amounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Drawers', [
            'foreignKey' => 'drawer_id',
            'joinType' => 'INNER',
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
            ->integer('one')
            ->allowEmptyString('one');

        $validator
            ->integer('two')
            ->allowEmptyString('two');

        $validator
            ->integer('five')
            ->allowEmptyString('five');

        $validator
            ->integer('ten')
            ->allowEmptyString('ten');

        $validator
            ->integer('twenty')
            ->allowEmptyString('twenty');

        $validator
            ->integer('fifty')
            ->allowEmptyString('fifty');

        $validator
            ->integer('hundred')
            ->allowEmptyString('hundred');

        $validator
            ->integer('twohundred')
            ->allowEmptyString('twohundred');

        $validator
            ->integer('fivehundred')
            ->allowEmptyString('fivehundred');

        $validator
            ->integer('twothousand')
            ->allowEmptyString('twothousand');

        $validator
            ->integer('total_amount')
            ->requirePresence('total_amount', 'create')
            ->notEmptyString('total_amount');

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
        $rules->add($rules->existsIn(['drawer_id'], 'Drawers'));

        return $rules;
    }
}
