<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MailboxSends Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Messages
 * @property \Cake\ORM\Association\HasMany $Messages
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\MailboxSend get($primaryKey, $options = [])
 * @method \App\Model\Entity\MailboxSend newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MailboxSend[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MailboxSend|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MailboxSend patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MailboxSend[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MailboxSend findOrCreate($search, callable $callback = null, $options = [])
 */
class MailboxSendsTable extends Table
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

        $this->setTable('mailbox_sends');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Messages', [
            'foreignKey' => 'message_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'mailbox_send_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'mailbox_send_id'
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
        $rules->add($rules->existsIn(['message_id'], 'Messages'));

        return $rules;
    }
}
