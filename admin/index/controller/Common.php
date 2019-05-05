<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/5/1
 * Time: 0:06
 */

namespace app\index\controller;

use \org\Auth;
use think\Controller;

class Common extends Controller
{
//    当任何函数加载时候  会调用此函数
     public function _initialize(){//默认的方法  会自动执行 特征有点像构造方法
//         var_dump("Commonm方法进入");
      $uid = session('user')['id'];
         if(empty($uid)){
              echo '<script>alert("没有登陆");location.href="'.U('login/index').'"</script>';
         }
    
    
         $AUTH = new Auth();
        // MODULE_NAME(index).'/'.CONTROLLER_NAME(index).'/'.ACTION_NAME(index)==index/index/index
    
      if(!$AUTH->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('user')['id'])){
    
           echo '<script>location.href="'.U('index/login/check_error').'"</script>';
      }
    
    
      }
}