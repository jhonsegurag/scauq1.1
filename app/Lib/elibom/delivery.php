<?php

    class Delivery extends Resource{

        public function get($id) {
            $client = new Client($this->usuario, $this->token);
            $response = $client->get('messages/' . $id);

            return $response;
        }
    }
?>