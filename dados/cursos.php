<?php

function cursos()
{
    return [
        "php" => [
            "nome_curso" => "Curso de PHP Fundamentos",
            "versão_ferramenta" => 7.4,
            "carga_horaria" => 40,
            "status" => true
        ],
        
        "java" =>[
            "nome_curso" => "Curso de Java Fundamentos",
            "versão_ferramenta" => 11.4,
            "carga_horaria" => 30,
            "status" => false
        ],
    
        "c#" =>[
            "nome_curso" => "Curso de Java C# Fundamentos",
            "versão_ferramenta" => 5,
            "carga_horaria" => 60,
            "status" => true
        ],

        "javascript" =>[
            "nome_curso" => "Curso de Javascript Fundamentos",
            "versão_ferramenta" => 11.4,
            "carga_horaria" => 30,
            "status" => false
        ]
    ];
}