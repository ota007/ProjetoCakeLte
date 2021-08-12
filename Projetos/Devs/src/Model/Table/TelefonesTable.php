<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Telefones Model
 *
 * @property \App\Model\Table\OperadorasTable&\Cake\ORM\Association\BelongsTo $Operadoras
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\Telefone newEmptyEntity()
 * @method \App\Model\Entity\Telefone newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Telefone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Telefone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Telefone findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Telefone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Telefone[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Telefone|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Telefone saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TelefonesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('telefones');
        $this->setDisplayField('id_telefone');
        $this->setPrimaryKey('id_telefone');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Operadoras', [
            'foreignKey' => 'operadora_id',
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id_telefone')
            ->allowEmptyString('id_telefone', null, 'create');

        $validator
            ->integer('ddd')
            ->allowEmptyString('ddd');

        $validator
            ->integer('numero')
            ->allowEmptyString('numero');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['operadora_id'], 'Operadoras'), ['errorField' => 'operadora_id']);
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'), ['errorField' => 'usuario_id']);

        return $rules;
    }
}
