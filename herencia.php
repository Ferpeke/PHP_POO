<?php
    class clasePadre {
        public function metodoPadre() {
            return "Hola desde el metodo padre";
        }
        public function metodo1() {
            return "Este es el metodo padre";
        }
    }

    class claseHijo extends clasePadre {

        public function metodoHijo() {
            return self::metodo1();
        }

        public function metodo1() {
            return "Este es el metodo hijo";
        }

    }
// La hererncia es obtener todas las propiedades de una clase a otra mediante
// la palabra reservada extends
    
    $objeto = new claseHijo();
    echo $objeto -> metodoHijo();

//Instancia rapidao de doble puntuacion

    // echo claseHijo::metodoHijo();

    //parent trae el metodo de la clase padre
    //self trae el metodo de esa misma clase

?>