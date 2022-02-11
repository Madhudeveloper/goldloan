<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Qualities Model
 *
 * @property \App\Model\Table\LoanItemsTable&\Cake\ORM\Association\HasMany $LoanItems
 * @property &\Cake\ORM\Association\HasMany $QualityAmounts
 *
 * @method \App\Model\Entity\Quality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quality newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Quality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quality[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quality findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QualitiesTable extends Table
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

        $this->setTable('qualities');
        $this->setDisplayField('quality');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('LoanItems', [
            'foreignKey' => 'quality_id',
        ]);
        $this->hasMany('QualityAmounts', [
            'foreignKey' => 'quality_id',
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
            ->scalar('quality')
            ->maxLength('quality', 255)
            ->requirePresence('quality', 'create')
            ->notEmptyString('quality');

        $validator
            ->numeric('percentage')
            ->requirePresence('percentage', 'create')
            ->notEmptyString('percentage');

        return $validator;
    }
}
