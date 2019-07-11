<?php

namespace Hcode\Model;

use \HCode\DB\Sql;
use \HCode\Model;

class User extends Model {

    public static function login($login, $password) 
    {

        $sql = Sql();

        $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
            ":LOGIN"=>$login
        ));

        if (count($results) === 0) {
            throw new \Exception("Usuário inexistente ou Senha inválida.");
        }

        $data = $results[0];

        if (password_verify($password, $data["despassword"]) === true) {

            $user = new User();

            $user->setiduser($data["iduser"]);

        } else {
            throw new \Exception("Usuário inexistente ou Senha inválida.");
        }

    }

}

?>