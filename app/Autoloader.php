<?php
namespace App;

class Autoloader{

    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    // __CLASS__ c est la classe courante
    
    static function autoload($class){
        if (strpos($class, __NAMESPACE__ .'\\') === 0){
            $class = str_replace(__NAMESPACE__.'\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ .'/' .$class. '.php';
        }
    }
    // on la met en static car on aura pas besoin d instancier notre classe
}