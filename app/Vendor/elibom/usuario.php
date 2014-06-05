<?php

    class Usuario extends Resource{

        public function getAll() {
            $client = new Client($this->usuario, $this->token);
            $response = $client->get('users');

            return $response;
        }

        public function get($id) {
            $client = new Client($this->usuario, $this->token);
            $response = $client->get('users/' . $id);

            return $response;
        }
    }
?>