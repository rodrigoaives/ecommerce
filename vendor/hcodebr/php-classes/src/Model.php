<?php

namespace Hcode;

class Model {

    private $values = [];

    public function __call($name, $args) {

        // Pega somente os 3 primeiros caracteres da string
        $method = substr($name, 0, 3);
                
        // Pega somente o que vem após os 3 primeiros caracteres da string
        $fieldName = substr($name, 3, strlen($name));

        switch($method)
        {
            case "get":
                return (isset($this->values[$fieldName])) ? $this->values[$fieldName] : NULL;
            break; 

            case "set":
                $this->values[$fieldName] = $args[0];
            break;
        }

    }

    public function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->{"set" . $key} ($value);
        }
    }

    public function getValues()
    {
        return $this->values;
    }
}


?>