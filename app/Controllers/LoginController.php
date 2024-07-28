<?php
namespace App\Controllers;
Use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends BaseController
{
        public function index()
        {
            helper(['form','url']);

            $data['titulo'] = 'login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/user/login');
        echo view('front/footer_view');
        }

        public function auth()
        {
            $session = session();
            $model = new UserModel();

            //datos del formulario de login
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $data = $model-> where('email', $email)->first();

            if ($data) {
                $pass = $data['password'];
                $baja = $data['baja'];
                if ($baja =="SI"){
                    $session ->setFlashdata('msg','Usuario dado de baja');
                    return redirect()->to('login');
                }

                $verify_pass = password_verify($password,$pass);

                if($verify_pass){
                    $sess_data = [
                        "id_usuario" => $data['id_usuario'],
                        "nombre"=> $data["nombre"],
                        "apellido"=> $data["apellido"],
                        "usuario"=> $data["usuario"],
                        "email"=> $data["email"],
                        "perfil_id"=> $data["perfil_id"],
                        "logged_in"=> TRUE
                    ];

                    $session -> set($sess_data);

                    session()-> setFlashdata('msg','Bienvenido, TimeLord!');
                    return redirect()->to('/panel');
                } else{
                    $session -> setFlashdata('msg','Contraseña Incorrecta');
                    return redirect()->to('login');
                }
            } else {
                $session-> setFlashdata('msg','Email o Usuario Incorrecto');
                return redirect() -> to('login');
            }
        }

        public function logout(){
            $session = session();
            $session -> destroy();
            return redirect() -> to('/');
        }
}