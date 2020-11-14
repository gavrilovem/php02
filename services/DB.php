<?php
    namespace App\services;
    class DB implements IDB {
        public function getAll($sql) {
            return 'allRes ' . $sql;
        }

        public function getOne($sql, $params = []) {
            return 'oneRes ' . $sql;
        }

        public function execute($sql, $params = []) {
            return 'execRes ' . $sql;
        }
    }