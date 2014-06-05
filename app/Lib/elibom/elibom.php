<?php

    require('resource.php');
    require('client.php');
    require('message.php');
    require('scheduler.php');
    require('delivery.php');
    require('usuario.php');
    require('account.php');


    class ElibomClient extends Resource{

        public function sendMessage($to, $txt) {
            $message = new Message($this->usuario, $this->token);
            $deliveryToken = $message->send($to, $txt);

            return $deliveryToken;
        }

        public function getDelivery($deliveryToken) {
            $delivery = new Delivery($this->usuario, $this->token);
            $deliveryData = $delivery->get($deliveryToken);

            return $deliveryData;
        }

        public function scheduleMessage($to, $txt, $date) {
            $scheduler = new Scheduler($this->usuario, $this->token);
            $scheduleId = $scheduler->schedule($to, $txt, $date);

            return $scheduleId;
        }

        public function getScheduledMessage($scheduleId) {
            $scheduler = new Scheduler($this->usuario, $this->token);
            $schedule = $scheduler->get($scheduleId);

            return $schedule;
        }

        public function getScheduledMessages() {
            $scheduler = new Scheduler($this->usuario, $this->token);
            $schedules = $scheduler->getAll();

            return $schedules;
        }

        public function unscheduleMessage($scheduleId) {
            $scheduler = new Scheduler($this->usuario, $this->token);
            $schedules = $scheduler->unschedule($scheduleId);
        }

        public function getUsers() {
            $userController = new Usuario($this->usuario, $this->token);
            $users = $userController->getAll();

            return $users;
        }

        public function getUser($userId) {
            $userController = new Usuario($this->usuario, $this->token);
            $usuario = $userController->get($userId);

            return $usuario;
        }

        public function getAccount() {
            $accountController = new Account($this->usuario, $this->token);
            $account = $accountController->get();

            return $account;
        }
    }

?>
