<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica si el usuario está autenticado
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('login');
        }

        // Verifica si el usuario tiene el perfil_id adecuado
        if ($session->get('perfil_id') != 1) {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No es necesario hacer nada aquí
    }
}
