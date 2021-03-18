<?php

class AuthController extends CI_Controller {
    
   
	public function login()
    {
        if($this->session->userdata('auth') == true){
            redirect('home');
        }

        $data = array();
        $data['title'] = 'Login';
        $data['view_style'] = 'login.css';
        
        $data['view_controller'] = 'login_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('auth/login');
        $this->load->view('layout/scripts', $data);
    }
    
    public function perfil()
    {
        $id = $this->session->id;
       
        session_redirect();

        $data = array();
        $data['title'] = 'perfil';
        $data['user'] = $this->getUser($id);
        $data['view_controller'] = 'login_vs.js';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header');
        $this->load->view('auth/perfil');
        $this->load->view('layout/scripts', $data);
    }
    
    public function getUser($id){
       
        $this->db->where("id",$id);
        return $this->db->get("users");
    }

    public function auth(){

        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $this->db->select('id, nombre, apellido_p, password,apellido_m');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $row = $query->row();
        
       
        //si encuentra un usuario con ese correo, verifica la pass
        if (isset($row))
        {
        
        $this->db->select('r.id,r.name');
        $this->db->from('roles r');
        $this->db->join('rol_user ru','ru.rol_id = r.id', 'inner');
        $this->db->where('ru.user_id', $row->id);
        $query3 = $this->db->get();
        $row3 = $query3->row();
            
            if(password_verify($password, $row->password)){
              
                    
                    $data = array(
                    'id' => $row->id,
                    'name' => $row->nombre.' '.$row->apellido_p,
                    'apellido_m' => $row->apellido_m,
                    'error' => false,
                    'type' => $row3->name,
                    'auth' => true
                        );
                    
                    $data_s = array(
                        'id_user' => $data['id']
                    );
                    $this->db->insert('sessions_user',$data_s);
               
                
                $this->session->set_userdata($data);


                echo json_encode($data);
            }
            else{
                echo json_encode(array('error' => true));
            }
        }
        else{
            echo json_encode(array('error' => true));
        }
    }
    

    public function checkEmail()
    {
        $email = $_POST["email"];

        $this->db->select('id, email');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $row = $query->row();

        if (isset($row))
        {
            echo json_encode(false);
        }
        else{
            echo json_encode(true);
        }
    } 
    


    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
   
    
}