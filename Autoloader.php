<?php
namespace Blog;
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     * @throws \Exception
     */
    static function autoload($class){

        if (strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            if(file_exists($class.".php")) {
                require $class . '.php';
            }else{
                throw new \Exception($class." no exist !");
            }
        }
    }

}