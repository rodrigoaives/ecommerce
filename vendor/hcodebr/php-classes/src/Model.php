<?php

namespace Hcode;

class Model {

    private $values = [];

    public function __call($name, $args) {

        // Pega somente os 3 primeiros caracteres da string
        $method = substr($name, 0, 3);
                
        // Pega somente o que vem após os 3 primeiros caracteres da string
        $fieldName = substr($name, 3, strlen($name));

        var_dump($method, $fieldName);
        exit;
    }

}


?>