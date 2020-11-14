<?php
    namespace App\services;
    interface IDB {
        const ERROR_CONNECT = 500;
        
        public function getAll($sql);
        public function getOne($sql, $params = []);
        public function execute($sql, $params = []);
    }