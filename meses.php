<?php
    class Meses {

        //Devuelve el array de los meses
        function getMeses() {

            //Array meses
            $meses = [
                1 => array("Enero",31),
                2 => array("Febrero",28),
                3 => array("Marzo",31),
                4 => array("Abril",30),
                5 => array("Mayo",31),
                6 => array("Junio",30),
                7 => array("Julio",31),
                8 => array("Agosto",31),
                9 => array("Septiembre",30),
                10 => array("Octubre",31),
                11 => array("Noviembre",30),
                12 => array("Diciembre",31),
            ];

            return $meses;
        }


        //Al pasarle una fecha numerica especifica te devolverá el día y mes
        function getFechaNumerica($fecha) {

            //Ejemplo de fecha: 12-02-21
            $dia = substr($fecha,0,2);
            $mes = substr($fecha,3,2);
            $anio = "20".substr($fecha,6,2); //también se podría sacar el año del sistema

            $arrayMeses = $this->getMeses();


            $fechaReturned = "-1 de Febrero de -1";

            if($this->getBisiesto($anio)) {
                $arrayMeses[2][1] = 29; 
            }
            

            foreach ($arrayMeses as $key => $value) {

                //Si el mes que el usuario introdujo concuerda con uno del array...
                if($mes == $key) {
                   
                    $fechaReturned = $dia." de ".$value[0]. " de ". $anio . ". Además el mes tiene: ". $value[1] . " días";
                }
            }
            return $fechaReturned;

        }


        //Obtiene si el año es bisiesto, si se le pasa un parametro
        //será lo obtendrá de ese año, si no se le pasa ninguno, será del 2021
        function getBisiesto($anio=2021) {

            if($anio % 4 == 0 && $anio %100 != 0 || ($anio %100 == 0 && $anio % 400 == 0)) 
                return true;
            return false;

        }
    }
?>