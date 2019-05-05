<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/4/29
 * Time: 22:59
 */

namespace app\index\controller;
use think\Controller;
use org\Auth;

class Users extends Common
{
//    管理员list界面
    public function admin_list()
    {
        $m=M('admin_user');
        $data=$m->select();
        $this->assign('data',$data);
        return  $this->fetch();
       
    }
    public function admin_add()
    {
        $m=M('auth_group');
        $data=$m->where("status=1")->select();
    
        $this->assign('data',$data);
        return  $this->fetch();
    }
    public function admin_add_user()
    {
        if($_POST) {
            $data['admin_name'] = $_POST['admin_name'];
//            md5加密
            $data['admin_password'] = md5($_POST['admin_password']);
    
            $m = M('admin_user');//用户数据库
            $name = $m->where("admin_name='" . $data['admin_name'] . "'")->find();
    
    
            //重复用户名
            if (!$name) {
                $g = M('auth_group_access');//分组数据库
                $res1 = $m->add($data);//用户数据库
                $group['group_id'] = $_POST['group_id'];
                $group['uid'] = $res1;
                $res2 = $g->add($group);//分组数据库
                if ($res1 && $res2) {
                    
                    return $this->success("成功", "admin_list", 2);
                } else {
            
                    return $this->error("失败");
            
                }
            } else {
                return $this->error("当前用户名已存在");
            }
        }
    }
    
    //权限列表页面
    public function admin_permission()
    {
        $m=M('auth_rule');
        $data=$m->where("status=1")->select();
        $this->assign('data',$data);
    
        return  $this->fetch();
    }
    
//    用户角色管理
    public function admin_role_add_user(){
        $data['title']=$_POST['roleName'];
        $data['rules']=implode(",", $_POST['check']);
        $data['status']=1;
        $m=M('auth_group');
        $result=$m->add($data);
        
        if($result){
            
            return  $this->success("成功","admin_role",2);
        }else{
            
            return $this->error("失败");
            
        }
    }
    
    public function admin_role_add()
    {
    
        $m=M('auth_rule');
        $data=$m->where("status=1")->select();
        $this->assign('data',$data);
    
        return $this->fetch();
      
    }
    public function admin_role()
    {
        $m=M('auth_group');
        $data=$m->where("status=1")->select();
        $this->assign('data',$data);
        return  $this->fetch();
    }
    public function admin_permission_add()
    {
        return $this->fetch();
    }
}