<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Polices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Immovables
 *
 * @method \App\Model\Entity\Police get($primaryKey, $options = [])
 * @method \App\Model\Entity\Police newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Police[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Police|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Police patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Police[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Police findOrCreate($search, callable $callback = null, $options = [])
 */
class PolicesTable extends Table
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

        $this->setTable('polices');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Immovables', [
            'foreignKey' => 'immovable_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->numeric('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['immovable_id'], 'Immovables'));

        return $rules;
    }
}
