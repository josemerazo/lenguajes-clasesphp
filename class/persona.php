<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $fecha;
    private $lugares_visitado = [];
    //SCOPE
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function imprimir()
    {
        $lugaresVisitadosStr = "";
        for ($i = 0; $i < count($this->lugares_visitado); $i++) {
            $lugaresVisitadosStr .= $this->lugares_visitado[$i] . 
                (($i < count($this->lugares_visitado)-1) ? ", " : "");
        }
        /*
            (condicion)?true:false
        */
        return $this->nombre . " " . $this->apellido . "<br/>" .
            " Lugares visitados: " . $lugaresVisitadosStr;
    }

    public function agregar_lugar($lugar)
    {
        array_push($this->lugares_visitado, $lugar);
    }

    public function __construct($nombre, $apellido, $fecha)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha = $fecha;
    }
}
