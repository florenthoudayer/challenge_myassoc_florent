<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acteurs Model
 *
 * @method \App\Model\Entity\Acteur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Acteur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Acteur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Acteur|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acteur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Acteur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Acteur findOrCreate($search, callable $callback = null, $options = [])
 */
class ActeursTable extends Table
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

        $this->setTable('acteurs');
        $this->setDisplayField('id_acteur');
        $this->setPrimaryKey('id_acteur');
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
            ->integer('id_acteur')
            ->allowEmpty('id_acteur', 'create');

        $validator
            ->scalar('nom')
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->scalar('prenom')
            ->requirePresence('prenom', 'create')
            ->notEmpty('prenom');

        return $validator;
    }
}
