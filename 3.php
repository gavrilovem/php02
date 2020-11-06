<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // x = 0; x = 0 + 1 (1)
$b1->foo(); // x = 0; x = 0 + 1 (1)
$a1->foo(); // x = 1; x = 1 + 1 (2)
$b1->foo(); // x = 1; x = 1 + 1 (2)