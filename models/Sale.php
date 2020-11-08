<?php
    namespace App\models;
    class Sale extends Model {
        protected function getTableName() :string {
            return 'sales';
        }
        protected function getTableColumns() :string {
            return 'product_id, discount';
        }
    }