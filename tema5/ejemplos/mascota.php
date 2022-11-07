<?php
class Mascota{
    public static function getName(){
        return "Soy una mascota";
    }
    public static function whoami(){
        static::getName();
    }
}

class Perro extends Mascota{
    public static function getName(){
        return "Soy un perro";
    }
}
Perro::whoami();
?>