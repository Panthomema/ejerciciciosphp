<?php

class App {
    public function __construct($name = "Ejercicio 17 PHP")
    {
        $this->name = $name;
        //echo "Constructor.<br>";
    }

    public function run()
    {
        //echo "Método principal.<br>";
        $this->index();
        $this->fibonacci();
    }

    public function index()
    {
        //echo "Index loco.<br>";
        include('views/index.php');
    }

    public function fibonacci()
    {
        $anterior = 0;
        $siguiente = 1;
        $i= 2;
        $fibonacci[] = 0;
        $fibonacci[] = 1;

        while ($siguiente < 1000000) {
            $fibonacci[$i] = $anterior + $siguiente;
            $anterior = $siguiente;
            $siguiente = $fibonacci[$i];
            $i++;
        }

        include('views/fibonacci.php');  
    }

    public function potencias2()
    {   
        $potencias = [];

        for ($i=2; $i <= 24; $i++) { 
            $potencias[] = 2**$i;
        }

        include('views/potencias2.php');
    }

    public function factoriales()
    {
        
    }

    public function primos()
    {
        $primos = [];

        for ($i=1; $i < 1000000; $i++) { 
            for ($j=2; $j < $i; $j++) { 
               if ($i % $j == 0) {
                   $primos[] = $i;
               }
            }
        }
    }

