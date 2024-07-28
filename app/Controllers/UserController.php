<?php
namespace App\Controllers;
Use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller{
    public function __construct(){
        helper(['form','url']); //funciones de codeigniter, helper sirve para acceder a la biblio
    }

    public function create(){
        $data['titulo'] = 'registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/user/registrarse');
        echo view('front/footer_view');
    }

    public function formValidation(){
        $input = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[100]',
            'apellido' =>'required|min_length[3]|max_length[100]',
            'email' =>'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario' =>'required|min_length[3]|max_length[100]|is_unique[usuarios.usuario]',
            'password' =>'required|min_length[3]|max_length[100]'
        ]

        );
        $formModel = new UserModel();

        if (!$input){
            $data['titulo'] = 'registrarse';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/user/registrarse', ['validation' => $this-> validator ]);
            echo view('front/footer_view');
        } else {
            $formModel -> save([
            'nombre' => $this-> request-> getVar('nombre'),
            'apellido' =>$this-> request-> getVar('apellido'),
            'email' =>$this-> request-> getVar('email'),
            'usuario' =>$this-> request-> getVar('usuario'),
            'password' => password_hash($this-> request-> getVar('password'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success','Se ha registrado con exito');
            return $this->response->redirect('/login');
        }
    }


    
}