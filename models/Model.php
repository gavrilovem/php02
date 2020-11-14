<?php
    namespace App\models;
    abstract class Model {
        protected $db;

        public function __construct(\App\services\IDB $db) {
            $this->db = $db;
        }

        abstract protected function getTableName() :string;
        abstract protected function getTableColumns() :string;

        public function getOne($id) {
            $sql = "SELECT * FROM {$this->getTableName()} WHERE id = {$id}";
            return $this->db->getOne($sql);
        }

        public function getAll() {
            $sql = "SELECT * FROM {$this->getTableName()}";
            return $this->db->getAll($sql);
        }

        public function execute($params) {
            $sql = "INSERT INTO ({$this->getTableColumns()}) VALUES ('{$params['product_id']}', '{$params['discount']}')";
            return $this->db->execute($sql);
        }
    }