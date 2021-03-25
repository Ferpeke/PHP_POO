<?php

    class miClase {
        // Mis atributos
        public $resultado = 0;

        //mis metodos

        public function miMetodo($Valor1, $Valor2){

            $this -> resultado = $Valor1 + $Valor2;

            return $this -> resultado;
        }
    }//termina mi clase

    //instanciar o declarar un objeto
    $miObjeto = new miClase();

    echo $miObjeto -> miMetodo(1, 20);
    // y como resultado nos da 21

?>