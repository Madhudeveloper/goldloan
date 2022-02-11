<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LoanItems Model
 *
 * @property \App\Model\Table\LoansTable&\Cake\ORM\Association\BelongsTo $Loans
 * @property \App\Model\Table\TypesTable&\Cake\ORM\Association\BelongsTo $Types
 * @property \App\Model\Table\QualitiesTable&\Cake\ORM\Association\BelongsTo $Qualities
 * @property \App\Model\Table\ContainersTable&\Cake\ORM\Association\BelongsTo $Containers
 *
 * @method \App\Model\Entity\LoanItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\LoanItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LoanItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LoanItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LoanItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LoanItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LoanItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LoanItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LoanItemsTable extends Table
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

        $this->setTable('loan_items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Loans', [
            'foreignKey' => 'loan_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Qualities', [
            'foreignKey' => 'quality_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Containers', [
            'foreignKey' => 'container_id',
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
            ->decimal('Gross')
            ->requirePresence('Gross', 'create')
            ->notEmptyString('Gross');

        $validator
            ->decimal('Net')
            ->requirePresence('Net', 'create')
            ->notEmptyString('Net');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->numeric('value')
            ->requirePresence('value', 'create')
            ->notEmptyString('value');

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
        $rules->add($rules->existsIn(['loan_id'], 'Loans'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['quality_id'], 'Qualities'));
        $rules->add($rules->existsIn(['container_id'], 'Containers'));

        return $rules;
    }
}
