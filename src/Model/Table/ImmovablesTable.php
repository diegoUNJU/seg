<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Immovables Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Policies
 * @property \Cake\ORM\Association\BelongsTo $Clients
 * @property \Cake\ORM\Association\HasMany $Clients
 * @property \Cake\ORM\Association\HasMany $Polices
 *
 * @method \App\Model\Entity\Immovable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Immovable newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Immovable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Immovable|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Immovable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Immovable[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Immovable findOrCreate($search, callable $callback = null, $options = [])
 */
class ImmovablesTable extends Table
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

        $this->setTable('immovables');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Policies', [
            'foreignKey' => 'policy_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Clients', [
            'foreignKey' => 'immovable_id'
        ]);
        $this->hasMany('Polices', [
            'foreignKey' => 'immovable_id'
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');

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
        $rules->add($rules->existsIn(['policy_id'], 'Policies'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
