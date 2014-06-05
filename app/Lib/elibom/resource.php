<?php

    class Resource {

        protected $usuario;
        protected $token;

        public function __construct($u, $t) {
            $this->usuario = $u;
            $this->token = $t;
        }
    }
?>