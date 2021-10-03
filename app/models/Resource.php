<?php
trait Resource
{
    public static function sex(){
        return [
            0 => [
                "nombre" => "Masculino"
            ],
            1 => [
                "nombre" => "Femenino"
            ]
        ];
    }
    
    public static function position(){
        return [
            0 => [
                "nombre" => "Personal de limpieza",
            ],
            1 => [
                "nombre" => "Secretaria/o",
            ],
            2 => [
                "nombre" => "Personal Tecnico",
            ],
            3 => [
                "nombre" => "Coordinador/a",
            ],
        ];
    }
    
}


