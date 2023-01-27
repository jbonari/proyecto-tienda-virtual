<?php

require_once 'models/usuario.php';

class usuarioController{

    public function index(){
        echo "controlador Usuarios, accion index";
    }

    public function registro(){
        //primero mostramos la vista
        require_once 'views/usuario/registro.php';
    }

    public function save(){

        if(isset($_POST)){
            //almacenamos los datos del POST en variables, creamos un objeto y le pasamos como valor
            // los datos recogidos
            $nombre= isset($_POST['nombre']) ? $_POST['nombre'] :false;
            $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos'] :false;
            $email=isset($_POST['email']) ? $_POST['email']: false;
            $password=isset($_POST['password']) ? $_POST['password']: false;

            if($nombre && $apellidos && $email && $password){
                $usuario=new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save=$usuario->save();

                if($save){
                    //si se cumple, creamos una sesion
                    $_SESSION['register']="completed";
                }else{
                    $_SESSION['register']="failed";
                }
            }else{
                $_SESSION['register']="failed";
            }

        }else{
            $_SESSION['register']="failed";
        }
        header("Location:".base_url.'usuario/registro');
    }

    public function login(){
        if(isset($_POST)){
            // Identificar al usuario
            // Consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;

                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }

            }else{
                $_SESSION['error_login'] = 'Identificación fallida !!';
            }

        }
        header("Location:".base_url);
    }


    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        header("Location:".base_url);
    }



}