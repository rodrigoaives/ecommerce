<?php

namespace Hcode; 

class PageAdmin extends Page { 

    public function __contruct($opts = array(), $tpl_dir = "../views/admin/") {

        // Pega a configuracao do construct do Page.php
        parent::__construct($opts, $tpl_dir);

    }

}

?>