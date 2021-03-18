<?php

class MainController extends CI_Controller {
    
     public function __construct()
    {
        parent::__construct();
    }


    public function view($page = 'home')
    {

        redirect($page);
    }

    public function inicio()
    {
        $data = array();
        $data['title'] = 'Inicio';
        //$data['view_controller'] = 'home_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('home');
        $this->load->view('layout/scripts');
    } 
    
    public function ambar()
    {
        $data = array();
        $data['title'] = 'Ambar';
        //$data['view_controller'] = 'home_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header-c');
        $this->load->view('casa/ambar');
        $this->load->view('layout/scripts');
    } 
    
    public function ambarII()
    {
        $data = array();
        $data['title'] = 'Ambar II';
        //$data['view_controller'] = 'home_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header-c');
        $this->load->view('casa/ambarii');
        $this->load->view('layout/scripts');
    }  
    
    public function basalto()
    {
        $data = array();
        $data['title'] = 'Basalto';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header-c');
        $this->load->view('casa/basalto');
        $this->load->view('layout/scripts');
    }
    
    public function basaltoII()
    {
        $data = array();
        $data['title'] = 'Basalto II';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header-c');
        $this->load->view('casa/basaltoii');
        $this->load->view('layout/scripts');
    }
    
    public function politica()
    {
        $data = array();
        $data['title'] = 'Política de Privacidad';

        $this->load->view('layout/head', $data);
        $this->load->view('politica/priv');
        $this->load->view('layout/scripts');
    }
    
     public function enviarMensaje(){
        
        
        $this->load->library('email');
            $config['mailtype']  = 'html';

            $this->email->initialize($config);
            $this->email->from('ventas@camprestredelvalle.mx','Campestre del Valle');
            $this->email->to('marco_pascual410@hotmail.com');
            $this->email->subject("Nuevo Contacto por Dudas");
            
            $data = array (
                'message' => $_POST['message'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'tema' => $_POST['tema']
            );
        
            $this->email->message($this->send_email($data));
            
         
         try {
                if($this->email->send()){
                
                echo json_encode(array('error' => false));
                
                    }else{

                        echo json_encode(array('error' => true));
                    }
            } catch (Exception $e) {
                echo json_encode(array('error' => true));
            }
            
    }
    
    function send_email($data){
        
        $img_path = base_url('assets').'/';
        
        $html = "
        
           <img height='200px' width='200px' src='". $img_path ."logo.png'    />
           <h1>Nuevo Mensaje</h1>
           <h3>Nombre:</h3><br>
           <p>".$data['name']."</p>
           <h3>Asunto:</h3><br>
           <p>".$data['tema']."</p>
           <h3>Mensaje:</h3><br>
           <p>".$data['message']."</p>
           <h3>Correo:</h3><br>
           <p>".$data['email']."</p>
           ";
        
        return $html;
    }


}