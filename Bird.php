<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public static $flying = "yes";

    public static $instance_count = 0;
    public static $egg_num = 0;

    //creates an instance
    public static function create() {
        $class_name = get_called_class();
        $obj = new $class_name;     
        //$obj new static          
        self::$instance_count++;
        return $obj;
      }

    public static function can_fly() {
    $flying_string = (static::$flying == "yes") ? "Can Fly" : "Is Stuck on the Ground";
    return  $flying_string;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
    public static $egg_num = "3-4, sometimes 5";
}

class Kiwi extends Bird {
    public $name = "kiwi";
    public $diet = "omnivorous";
    public static $flying = "no";
}
