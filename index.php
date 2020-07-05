<?php
require_once "MultipleConstructor.php";
require_once "Example.php";

new Example();
new Example("one");
new Example("one", "two");