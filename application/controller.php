<?php // controller

class controller
{
    protected $model;
    protected $view;
    public function __construct()
    {
        $this->model = new model();
    }
    private function view($view, $data)
    {
        extract($data);
        include("$view.php");
    }
    // controller
    public function index()
    {
        //echo "hello world";

        $this->view('view', $this->model->get());
    }
    public function admin()
    {
        echo "hello world admin";

        //$this->view('view', $this->model->get());
    }
}