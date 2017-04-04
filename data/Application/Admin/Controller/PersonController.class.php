<?php
namespace Admin\Controller;
class PersonController extends CommonController
{
    var $person;
    var $department;
    var $info;
    var $path;
    var $savePath;

    public function __construct()
    {
        parent::__construct();
        $this->person = D("person");
        $this->department = D("department");
    }

    public function index()
    {
        //模糊查询
        $name = $_GET['name'];
        $data['name'] = array('like', "%" . $name . "%");
        $Person = D('Person');
        $count = $Person->where('info=1')->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $persons = $Person->relation(true)->where('info=1')->where($data)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach ($persons as &$person) {
            $departments = array_column($person['departments'], 'name');
            $person['departments'] = implode(',', $departments);
        }
        $this->assign('page', $show);// 赋值分页输出
        $this->assign("persons", $persons);
        $this->display();
    }

    public function add()
    {
        if ($_POST) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'xlsx', 'xlsm', 'xltx', 'xltm', 'xlsb', 'xlam', 'xls');// 设置附件上传类型
            $this->path = $upload->rootPath = './Uploads/'; // 设置附件上传根目录
            $this->savePath = $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info[0] = $upload->uploadOne($_FILES['photo1']);
            $info[1] = $upload->uploadOne($_FILES['photo2']);
            if (!$info[0] or !$info[1]) {// 上传错误提示错误信息
                $this->error($upload->getError());
                echo $info;
                return false;
            }

            $data = array();
            $data['name'] = I('post.name');
            $data['sex'] = I('post.sex');
            $data['thumb'] = I('post.thumb');
            $data['time'] = I('post.time');
            $data['age'] = I('post.age');
            $data['thumb'] = '/Uploads/' . $info[0]['savepath'] . $info[0]['savename'];
            $data['file'] = '/Uploads/' . $info[1]['savepath'] . $info[1]['savename'];
            $data['position'] = I('post.position');
            $data['departments'] = I('post.department_id');
            $this->person->relation(true)->add($data);
            $this->redirect('index');
        } else {
            $Department = D('Department');
            $departments = $Department->relation(true)->select();
            $this->assign('departments', $departments);
            $this->display();
        }

    }

    public function edit()
    {
        if ($_POST) {
            $this->person->create();
            $this->person->save();
            $this->redirect('index');
        } else {
            $id = I("get.id");
            $person = $this->person->find($id);
            $departments = $this->department->select();
            $this->assign('departments', $departments);
            $this->assign("person", $person);
            $this->display();
        }
    }

    public function destroy()
    {
        $id = I("get.id");
        $this->person->find($id);
        $this->person->where("id='$id'")->setField("info", 0);
        $this->redirect('index');
    }

    public function restore()
    {
        $id = I("get.id");
        $this->person->find($id);
        $this->person->where("id='$id'")->setField("info", 1);
        $this->redirect('index');
    }

    public function trash()
    {
        $Person = D('Person');
        $count = $Person->where('info=1')->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $persons = $Person->relation(true)->where('info=0')->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('page', $show);// 赋值分页输出
        $this->assign("persons", $persons);
        $this->display();
    }


    public function export()
    {
        import("ORG.Yufan.Excel");
        $list = $this->person->relation(true)->select();
        foreach ($list as &$person) {
            $departments = array_column($person['departments'], 'name');
            $person['departments'] = implode(',', $departments);
        }
        $row = array();
        $row[0] = array('序号', '名字', '照片', '年龄', '所属部门', '入职时间', '职务');
        $i = 1;
        foreach ($list as &$v) {
            $row[$i]['i'] = $i;
            $row[$i]['id'] = $v['id'];
            $row[$i]['name'] = $v['name'];
            $row[$i]['sex'] = $v['sex'];
            $row[$i]['time'] = $v['time'];
            $row[$i]['thumb'] = $v['thumb'];
            $row[$i]['age'] = $v['age'];
            $row[$i]['position'] = $v['position'];
            $row[$i]['time'] = $v['time'];
            $row[$i]['departments'] = $v['departments'];
            $i++;
        }

        $xls = new \Excel_XML('UTF-8', false, 'datalist');
        $xls->addArray($row);
        $xls->generateXML("yufan956932910");
    }

    public function view()
    {
        import("Vendor.PHPExcel");
        $objExcel = new \PHPExcel();
        $objExcel = new \PHPExcel_Writer_Excel5($objExcel);
        $objWriterHTML = new \PHPExcel_Writer_HTML($objExcel);
        $objWriterHTML->save("php://output");
    }


}