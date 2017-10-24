<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Films Model
 *
 * @method \App\Model\Entity\Film get($primaryKey, $options = [])
 * @method \App\Model\Entity\Film newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Film[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Film|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Film patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Film[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Film findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmsTable extends Table
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

        $this->belongsTo('Acteurs', [
            'foreignKey' => 'id_acteur',
        ]);
                
        $this->setTable('films');
        $this->setDisplayField('id_film');
        $this->setPrimaryKey('id_film');
        
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
            ->integer('id_film')
            ->allowEmpty('id_film', 'create');

        $validator
            ->scalar('titre')
            ->requirePresence('titre', 'create')
            ->notEmpty('titre');

        $validator
            ->integer('annee')
            ->requirePresence('annee', 'create')
            ->notEmpty('annee');

        $validator
            ->scalar('realisateur')
            ->requirePresence('realisateur', 'create')
            ->notEmpty('realisateur');

        $validator
            ->scalar('genre')
            ->requirePresence('genre', 'create')
            ->notEmpty('genre');

        $validator
            ->integer('id_acteur')
            ->requirePresence('id_acteur', 'create')
            ->notEmpty('id_acteur');

        return $validator;
    }
 
}
