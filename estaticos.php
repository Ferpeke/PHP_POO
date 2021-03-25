<?php
    class miclase {

        public $mensaje = 'hola';
                //" "
        public static function hola(){
            return "Hola ferpeke";
        }
        public static function metodo() {
            return self::hola();
        }
    }
    echo miclase::metodo();

?>