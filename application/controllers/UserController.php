<?php 

    class UserController extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model("Users");
        }

        public function index(){
            $error['error'] = "";
            $this->load->view('users/login', $error);
        }

        public function logeo(){
            $name=$_POST['name'];
            $password=$_POST['password'];
            $rsp = $this->Users->login($name, $password); 
            if($rsp){
                $user['users'] = $this->Users->getAll();
                $this->load->view('users/main', $user);
            }else{
                $error['error'] = "Credenciales no validas";
                $this->load->view('users/login', $error);
            }
        }

        public function eliminar(){
            $id = $_GET['id'];
            $rsp = $this->Users->eliminar($id);
            if($rsp){
                $user['users'] = $this->Users->getAll();
                $this->load->view('users/main', $user);
            }else{
                $error['error'] = "No se pudo eliminar";
                $this->load->view('users/main', $error);
            }
        }

        public function crearUser(){
            $name = $_POST['name'];
            $pass = $_POST['password'];

            $this->Users->crear($name, $pass);            
            $user['users'] = $this->Users->getAll();
            $this->load->view('users/main', $user);                            
        }
        
    }

    

?>