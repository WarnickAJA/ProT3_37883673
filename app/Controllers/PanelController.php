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

        $dato['perfil_id'] = $perfil;
        $dato['nombre']= $nombre;

        $dato['titulo'] = 'panel del usuario';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('front/usuario_logueado', $dato);
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

    public function actualizar($id, $nombre, $apellido)
    {
        $model = new UserModel();
        $datos = $model->getUserId($id);

        $data['titulo'] = 'Editar Usuario';
        $data['datos'] = $datos;
        $data['nombre'] = $nombre;
        $data['apellido'] = $apellido;


        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/user/actualizar',$data);
        echo view('front/footer_view');
    }


    //
}