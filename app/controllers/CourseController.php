<?php

class CourseController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Course');
    }

    public function index()
    {
        $session = new Session();

        if ($session->getLogin()){

            $courses = $this->model->getCourses();

            $data = [
                'titulo' => 'Cursos en linea',
                'menu'   => true,
                'data' => $courses,
            ];
            $this->view('courses/index');

        }else{
            header('location:' . ROOT);
        }
    }
}