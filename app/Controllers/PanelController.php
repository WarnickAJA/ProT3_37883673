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

    public function actualizar($id)
    {
        $model = new UserModel();

        // Validar y obtener los datos del formulario
        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            // Añade más campos según tus necesidades
        ];

        // Actualizar el usuario en la base de datos
        if ($model->update($id, $data)) {
            return redirect()->to('/dashboard')->with('status', 'Usuario actualizado exitosamente');
        } else {
            return redirect()->back()->with('status', 'Error al actualizar el usuario');
        }
    }

    public function delete($id)
    {
        $model = new UserModel();

        // Verificar si el usuario existe
        $user = $model->getUserId($id);
        if ($user) {
            // Eliminar el usuario
            $model->delete($id);
            return redirect()->to('/dashboard')->with('status', 'Usuario eliminado exitosamente');
        } else {
            return redirect()->to('/dashboard')->with('status', 'Usuario no encontrado');
        }
    }


    //
}