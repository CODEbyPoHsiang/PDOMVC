<?php 
class Member{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $member = $this->model->getAllmember();
        require 'view/member/list.php';
    }

    public function info($id)
    {
        $member = $this->model->getMemberById($id);
        require 'view/member/info.php';
    }

    public function create()
    {
        if ($_POST) {
            $this->model->insert();
            header("Location: /index.php/member");
        } else {
            require 'view/member/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: /index.php/member");
        } else {
            $member = $this->model->getMemberById($id);
            require 'view/member/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: /index.php/member");
        }
    }
}