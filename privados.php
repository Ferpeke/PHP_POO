<?php
    // Un metodo privado, solo puede ser accedidio
    // en la misma clase donde fue creado, al mismo tiempo.
    // No puede mostrarse fuera o en instacia debe manejarse
    // dentro de un metodo de la misma clase.

    class clase1 {
        private function saludar() {
            return "saludando";
        }
        public function mandaSaludo() {
            return self::saludar();
        }

    }

    $objeto = new clase1();
    echo $objeto -> mandaSaludo();


?>