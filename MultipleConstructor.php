<?php

class MultipleConstructor {
	public function __construct() {
        $args = func_get_args() ?? array();
        $num = func_num_args() ?? 0;

        if (method_exists($this, $method = '__construct'.$num)) {
            call_user_func_array(array($this, $method), $args);
        }
    }
}
?>