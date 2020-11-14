<?php
    namespace App\services;
    class Autoload {
        public function loadClass($className) {
            $className = preg_replace('/^App*/', '', $className);
            include dirname(__DIR__) . $className . '.php';
        }
    }