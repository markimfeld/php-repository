<?php

class Setting {

    private static $color;

    public static function setColor($color) {
        self::$color = $color;
    }

    public static function getColor() {
        return self::$color;
    }

}

?>