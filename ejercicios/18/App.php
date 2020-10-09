<?php

    class App {
        public function __construct($name = "Ejercicio 18 PHP")
        {
        $this->name = $name;
        //echo "Constructor.<br>";
        }

        public function run()
        {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
        
        $this->$method();      
        }

        public function login()
        {
            include('views/login.php');
        }

        public function auth()
        {
            if (isset($_POST) && !empty($_POST)) {
                setcookie("user", $_POST['user'], time() + 3600);
                setcookie("password", $_POST['password'], time() + 3600);
                
                header('Location:?method=home');
            } 
        }

        public function home()
        {
            include('views/home.php');
        }

        public function logout()
        {
            setcookie("user", $_POST['user'], time() - 1);
            setcookie("password", $_POST['password'], time() - 1);
                
            header('Location:?method=login');
        }
    }
