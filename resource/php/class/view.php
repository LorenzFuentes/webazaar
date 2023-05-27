<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

}
