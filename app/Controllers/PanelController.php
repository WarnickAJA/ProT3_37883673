<?php
namespace App\Controllers;
Use App\Models\UserModel;
use CodeIgniter\Controller;
//use CodeIgniter\RESTful\ResourceController;

class PanelController extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get("usuario");
        $perfil = $session->get("perfil_id");

        $data['perfil_id'] = $perfil;

        $dato['titulo'] = 'panel del usuario';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('front/usuario_logueado', $data);
        echo view('front/footer_view');
    }

    public function dashboard()
    {
        $model = new UserModel();
        $datos = $model->getUsuarios();

        $dato['titulo'] = 'Usuarios';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/user/dashboard',compact("datos")); //otra forma de enviar datos
        echo view('front/footer_view');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $datos = $model->getUserId($id);

        $data['titulo'] = 'Editar Usuario';
        $data['datos'] = $datos;

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/user/edit',$data);
        echo view('front/footer_view');
    }


    //
}