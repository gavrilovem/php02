<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // x = 0; echo x = 0 + 1; (1)
$a2->foo(); // x = 1; echo x = 1 + 1; (2)
$a1->foo(); // x = 2; echo x = 2 + 1; (3)
$a2->foo(); // x = 3; echo x = 3 + 1; (4)