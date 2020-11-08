<?php
    namespace App\models;
    class User extends Model {
        protected function getTableName() :string {
            return 'users';
        }
        protected function getTableColumns() :string {
            return 'name, login, pass';
        }
    }