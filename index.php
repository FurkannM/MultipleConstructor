<?php
require_once "MultipleConstructor.php";
require_once "ExampleConstructor.php";

new ExampleConstructor();
new ExampleConstructor("one");
new ExampleConstructor("one", "two");
