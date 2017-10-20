<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('email', "Un email est nécessaire")
            ->notEmpty('password', 'Un mot de passe est nécessaire')
            ->notEmpty('role', 'Un role est nécessaire')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'user']],
                'message' => 'Merci de rentrer un role valide'
            ]);
    }

}