<?php
    namespace App\models;
    class Good extends Model {
        protected function getTableName() :string {
            return 'goods';
        }
        protected function getTableColumns() :string {
            return 'name, description, photo_id, price';
        }
    }