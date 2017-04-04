<?php
namespace Admin\Controller;
class DepartmentController extends CommonController
{
    var $department;
    var $person;

    public function __construct()
    {
        parent:: __construct();
        $this->department = D('department');
        $this->person = D('person');
    }


    public function index()
    {
        $Department = D('Department');
        $departments = $Department->relation(true)->where("parent_id=0")->select();
        $this->assign('departments', $departments);
        $this->display();
    }

    public function add()
    {
        $Department = D('Department');
        if ($_POST) {
            $this->department->create();
            $this->department->add();
            $this->redirect('index');
        } else {
            $departments = $Department->relation(true)->where("parent_id=0")->select();
            $this->assign('departments', $departments);
            $this->display();
        }
    }

    public function edit()
    {
        $Department = D('Department');
        if ($_POST) {
            $this->department->create();
            $this->department->save();
            $this->redirect('index');
        } else {
            $id = I("get.id");
            $department = $this->department->find($id);
            $this->assign('department', $department);
            $departments = $Department->relation(true)->where("parent_id=0")->select();
            $this->assign('departments', $departments);
            $this->display();
        }
    }

    public function delete()
    {
        $id = I("get.id");
        $this->department->delete($id);
        $this->redirect('index');
    }
}