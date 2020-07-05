<?php

class ExampleConstructor extends MultipleConstructor{

	public function __construct0() {
        echo "MultipleConstructor test without argument";
    }

	public function __construct1($arg) {
        echo "MultipleConstructor test with one argument. 1=".$arg;
    }

    public function __construct2($arg, $argtwo) {
        echo "MultipleConstructor test with two argument. 1=".$arg.", 2=".$argtwo;
    }
}
?>
