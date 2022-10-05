<?php

class AdminUserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('AdminUser');
    }

    public function index()
    {
        $data = [
            'titulo' => 'Administración de Usuarios',
            'menu' => false,
            'admin' => true,
            'data' => [],
        ];

        $this->view('admin/users/index', $data);
    }

    public function create()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $erros = [];
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password1 = $_POST['password1'] ?? '';
            $password2 = $_POST['password2'] ?? '';

            $dataForm = [
                'name' => $name,
                'email' => $email,
                'password' => $password1,
            ];

            if (empty($name)){
                array_push($erros, 'El nombre el requerido');
            }

            if (empty($email)){
                array_push($erros, 'El email el requerido');
            }

            if (empty($password1)){
                array_push($erros, 'La contraseña es requerida');
            }

            if (empty($password2)){
                array_push($erros, 'La verificacion de clave es requerida');
            }

            if ($password1 != $password2){
                array_push($erros, 'Las claves on coinciden');
            }

            if (! $erros){

                if ($this->model->createAdminUser($dataForm)){

                }else{

                }

            }else{
                $data = [
                    'titulo' => 'Administración de Usuarios - Alta',
                    'menu' => false,
                    'admin' => true,
                    'erros' => $erros,
                    'data' => $dataForm,
                ];

                $this->view('admin/users/create', $data);
            }


        }else{
            $data = [
                'titulo' => 'Administración de Usuarios - Alta',
                'menu' => false,
                'admin' => true,
                'data' => [],
            ];

            $this->view('admin/users/create', $data);
        }

    }

    public function update()
    {
        print 'Modificación de usuarios';
    }

    public function delete()
    {
        print 'Eliminación de usuarios';
    }
}