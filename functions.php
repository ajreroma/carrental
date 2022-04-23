<?php
    function conn() {
        global $conn;
        return $conn;
    }
    function get_config($key) {
        global $_CONFIG;
        return $_CONFIG[$key];
    }
?>