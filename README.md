# MultipleConstructor
Multiple constructor for php

# Argument Length Based Constructor

public function __construct<length of argument>() {}
  
## Without Argument

public function __construct0() {
    echo "MultipleConstructor test without argument";
}

## One Argument

public function __construct1($arg) {
    echo "MultipleConstructor test with one argument. 1=".$arg;
}

## Two Argument

public function __construct2($arg, $argtwo) {
    echo "MultipleConstructor test with two argument. 1=".$arg.", 2=".$argtwo;
}

## Ten Argument
public function __construct10($one, $two, $three, $four, $fife, $six, $seven, $eight, $nine, $ten) {}
