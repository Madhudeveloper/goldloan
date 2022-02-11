<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QualityAmounts Model
 *
 * @property \App\Model\Table\QualitiesTable&\Cake\ORM\Association\BelongsTo $Qualities
 *
 * @method \App\Model\Entity\QualityAmount get($primaryKey, $options = [])
 * @method \App\Model\Entity\QualityAmount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QualityAmount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QualityAmount|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QualityAmount saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QualityAmount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QualityAmount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QualityAmount findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QualityAmountsTable extends Table
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

        $this->setTable('quality_amounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Qualities', [
            'foreignKey' => 'quality_id',
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->integer('todvalue')
            ->requirePresence('todvalue', 'create')
            ->notEmptyString('todvalue');

        $validator
            ->integer('percentage')
            ->requirePresence('percentage', 'create')
            ->notEmptyString('percentage');

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
        $rules->add($rules->existsIn(['quality_id'], 'Qualities'));

        return $rules;
    }
}
