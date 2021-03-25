<?php

    class miClase{
        //declaramos atributos
        public $atributo1 = "Hola mundo";

        //declaramos metodos
        public function miMetodo() {
            // como podemos mandar a llamr un atributo
            
            // utilizamos la pseudo variable this
            return $this -> atributo1;

        }
    }

?>