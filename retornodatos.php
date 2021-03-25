<?php

    class retornoDatos {

        // Tipo de string
        public function retornaString($edad) {
            
            if ($edad >= 18) {
                return "Eres mayor de edad";
            }elseif($edad < 18){
                return "Eres menor de edad";
            }elseif($edad < 0){
                return "Aun no has nacido";
            }
        }

        // Tipo de Entero

        public function retornaEntero($Valor) {
            if($Valor > 0){
                return 1;
            }else{
                return 0;
            }
        }

        // Tipo de Arreglo

        public function retornaArreglo($ciclos) {
            $datos = array();

            for ($i=0; $i < $ciclos; $i++) { 
                $datos[$i] = $i;
            }
            return $datos;
        }

        // Tipo de Json

        public function retornaJson(){
            $arr = array(
                "HDD" => 500,
                "Pantalla" => 21,
                "RAM" => 16
            );
            return json_encode($arr);
        }
    }

    $cadena = new retornoDatos();
    var_dump($cadena -> retornaString(90));
    echo "<hr>";
    var_dump($cadena -> retornaEntero(1));
    echo "<hr>";
    var_dump($cadena -> retornaArreglo(10));
    echo "<hr>";
    var_dump($cadena -> retornaJson(10));

?>