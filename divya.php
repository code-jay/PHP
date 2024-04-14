<?php
class sample {
    public static $var= 10;

    public static function demo() {
        echo "static method";
        echo self::$var;
    }
}

sample::demo();
?>