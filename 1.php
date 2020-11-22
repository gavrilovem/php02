<?php
    class Product {
        public $name;
        public $desc;
        public $price;

        public function __construct($name, $desc, $price) {
            $this->name = $name;
            $this->desc = $desc;
            $this->price = $price;
        }
        public function echoProduct() {
            return
                 $this->getName() . '<br>' .
                 $this->getDescription() . '<br>' .
                 $this->getPrice() . '<hr>';
        }
        protected function getName() {
            return "Название: $this->name";
        }
        protected function getDescription() {
            return "Описание: $this->desc";
        }
        protected function getPrice() {
            return "Цена: $this->price";
        }
    }
    class Bread extends Product {
        public $kind;
        public function __construct($name, $desc, $price, $kind) {
            parent::__construct($name, $desc, $price);
            $this->kind = $kind;
        }
        public function echoProduct() {
            return
                $this->getName() . '<br>' .
                $this->getDescription() . '<br>' .
                $this->getPrice() . '<br>' .
                $this->getKind() . '<hr>';
        }
        protected function getKind() {
            return "Вид: $this->kind";
        }
    }

    $good = new Product('Lorem', 'Lorem ipsum', '199');
    $bread = new Bread('Lorem2', 'Lorem ipsum2', '23', 'tadaa');
    echo $good->echoProduct();
    echo $bread->echoProduct();
    var_dump($good);