<?php
namespace app\index\controller;

use think\Controller;
class Login     extends Controller
{
    public function index(){
        
        return  $this->fetch();
        
    }
    public function login_done(){
        $m=M('admin_user');
        $data=$m->where("admin_name='".$_POST['admin_name']."' and admin_password='".md5($_POST['admin_password'])."'")->find();
        if($data){
            session('user',$data);
            return $this->success("登陆成功",U('index/index'));
        }else{
            return $this->error("登陆失败");
        }
    }
    
    public function check_error(){
        
        return $this->error("没有权限",U('index/welcome'),2);

    }
  
        public function users_out()
    {
        var_dump('DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD');exit();
//        Session::get('name');exit();
            Session::clear('AUTH');
         return $this->redirect('index/index/index');
    }
    
    
    
}
