<?php
namespace app\index\controller;

use think\Controller;
use org\Upload;

class Goods    extends Controller
{
//    分类页面
    public function product_category()
    {
        return $this->fetch();
    }


    //获取分类数据
    public function product_category_ajax()
    {
        $m = M('goods_type');
        $data = $m->field('id,pid,name')->select();
        echo json_encode($data);
    }

    //删除分类信息
    public function product_category_del()
    {
        $id = $_GET['id'];
        $m = M('goods_type');
        $data = $m->where("pid=" . $id)->find();

        if ($data) {
            $str = "分类下面还子分类,不允许删除";
            echo json_encode($str);
        } else {
            $re = $m->delete($id);
            if ($re) {
                echo 1;
            }
        }
    }

//添加分类信息
    public function product_category_add()
    {
        $m = M('goods_type');
//    查询数据库
        $data = $m->field("*,concat(path,',',id) as paths")->order('paths')->select();
//    	排序
        foreach ($data as $k => $v) {
            $data[$k]['name'] = str_repeat("----", $v['level']) . $v['name'];
        }
        var_dump($data);
        $this->assign('data', $data);
        return $this->fetch();
    }

    //添加分类到数据库
    public function goods_type_add()
    {
        //    	 获取前端的传值
        $data['name'] = $_POST['name'];
        $data['pid'] = $_POST['pid'];
        $m = M('goods_type');
//    		$id = $m->field("path")->find($data["id"]);
        //    		实例化数据哭
//        data 数据处理 进行等级处理
        /*
         * //
         *添加分类流程
         * 获取用户提交的name 和 PID
         *
         *
         *
         * */
        if ($data['name'] != "" && $data['pid'] != 0) {
            $path = $m->field("path")->find($data['pid']);
            $data['path'] = $path['path'];
            $data['level'] = substr_count($data['path'], ",");
//              ubstr_count  用来计算子串在字符串中出现的次数，根据，数还获取等级信息
            $re = $m->add($data);//返回插入id
            $path['id'] = $re;
            $path['path'] = $data['path'] . ',' . $re;
            $path['level'] = substr_count($path['path'], ",");
            $res = $m->save($path);
            if ($res) {
                echo '<script>alert("添加成功");parent.location.href="product_category"</script>';
            } else {
                echo '<script>alert("添加失败");parent.location.href="product_category"</script>';
            }
        } //    		最高等级名称判断
        else if ($data['name'] != "" && $data['pid'] == 0) {
            //$path=$m->field("path")->find($data['pid']);
            $data['path'] = $data['pid'];
            $data['level'] = 1;
            $re = $m->add($data);//返回插入id
            $path['id'] = $re;
            $path['path'] = $data['path'] . ',' . $re;
            $res = $m->save($path);
            if ($res) {
                echo '<script>alert("添加成功");parent.location.href="product_category"</script>';
            } else {
                echo '<script>alert("添加失败");parent.location.href="product_category"</script>';
            }
        } else {
            echo '<script>alert("添加失败,内容不能为空");parent.location.href="product_category"</script>';
        }
    }


//    产品渲染根据ID进行删选
    public function product_list()
    {
        $m=M('goods');
        $where="";
        if(!empty($_GET['id'])){
            $where="tid={$_GET['id']}";
        }

        $data=$m->where($where)->select();
        $this->assign('data',$data);
        return  $this->fetch();
    }

//     添加商品也
    public function product_add()
    {
//        先获取数据 分类
        $m = M('goods_type');
        $data = $m->field("*,concat(path,',',id) as paths")->order('paths')->select();
        foreach ($data as $k => $v) {
            $data[$k]['name'] = str_repeat("|------", $v['level']) . $v['name'];
        }
        $this->assign('data', $data);
        return $this->fetch();
    }
//删除商品
    public function product_edit_delete(){
        $id=$_GET['id'];

        $m=M('goods');
//        $result=$m->delete($id);
        if($m->delete($id)){
//           return  $this->success('删除成功','product_list');

            return  $this->redirect('product_list');
        }
    }

//    添加商品到数据库
    public function product_add_goods()
    {
//        var_dump($_POST);
        $m=M('goods');
        $data['goodsname']=$_POST['goodsname'];
        //获取分类的id及pid

        $str=explode(",",$_POST['tid']);
        $data['tid']=$str[0];
        $data['tpid']=$str[1];


        $data['unit']=$_POST['unit'];
        $data['attributes']=$_POST['attributes'];
        //拼接图片
        $data['imagepath']=implode(',', $_POST['imagepath']);

        $data['number']=$_POST['number'];
        $data['barcode']=$_POST['barcode'];
        $data['curprice']=$_POST['curprice'];
        $data['oriprice']=$_POST['oriprice'];
        $data['cosprice']=$_POST['cosprice'];
        $data['inventory']=$_POST['inventory'];
        $data['restrict']=$_POST['restrict'];
        $data['already']=$_POST['already'];
        $data['freight']=$_POST['freight'];
        $data['status']=$_POST['status'];
        $data['reorder']=$_POST['reorder'];
        $data['text']=$_POST['editorValue'];



        if($m->add($data)){

            return   $this->success("添加成功","product_list","",2);
        }else{
            return   $this->error("添加失败","product_list","",2);
        }
    }

//    修改商品跳转
    public function product_edit_goods()
    {
//        var_dump($_GET);
        $g=M('goods');
        $goods=$g->find($_GET['id']);
        $this->assign('goods',$goods);
        $m=M('goods_type');
        $data=$m->field("*,concat(path,',',id) as paths")->order('paths')->select();
        foreach($data as $k=>$v){
            $data[$k]['name']=str_repeat("|------",$v['level']).$v['name'];
        }

        $this->assign('data',$data);
        return $this->fetch();
    }
//修改商品进数据库
    public function product_edit_new_goods()
    {
//        var_dump($_POST);
        $data['goodsname']=$_POST['goodsname'];
        $tid=explode(",", $_POST['tid']);

        $data['tid']=$tid[0];
        $data['tpid']=$tid[1];
        $data['unit']=$_POST['unit'];
        $data['attributes']=$_POST['attributes'];
        $data['number']=$_POST['number'];
        $data['barcode']=$_POST['barcode'];
        $data['curprice']=$_POST['curprice'];
        $data['oriprice']=$_POST['oriprice'];
        $data['cosprice']=$_POST['cosprice'];
        $data['inventory']=$_POST['inventory'];
        $data['restrict']=$_POST['restrict'];
        $data['already']=$_POST['already'];
        $data['freight']=$_POST['freight'];
        $data['reorder']=$_POST['reorder'];
//        $data['text']=$_POST['editorValue'];
        $data['imagepath']="";
        $data['id']=$_POST['id'];
//        var_dump($data);exit();
        $m = M('goods');
        $result=$m->where("id=".$data['id'])->save($data);
//        var_dump($data);exit();
        if ($result) {
            return $this->success("修改商品成功", 'product_list', '', 5);

        } else {

            return $this->error("修改商品失败", 'product_list', '', 5);

        }
    }
    //添加商品图片数据库
    public function prduct_add_goods_ajax(){
        var_dump($_FILES);
        echo 1;
    }

    //商品图片上传
    public function product_add_images(){

//        var_dump("e3333333333333333333333333333333333");
        $upload = new  Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =       './static/files/';; // 设置附件上传目录    // 上传文件
        $upload->saveName=time().rand(1111,9999);
        $date=date("Y-m-d",time());//已上传日期为子目录名
        $upload->saveExt="png";//上传的文件后缀
        $info   =   $upload->upload();
//        var_dump($info);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $m=M('goods_files');
            $data['filepath']='/static/files/'.$date."/".$upload->saveName.".".$upload->saveExt;
            $result=$m->add($data);
            $file=['id'=>$result,'imagepath'=>$data['filepath']];
            echo json_encode($file);
        }
    }
    //商品图片删除
    public function product_del_images(){
        $m=M('goods_files');
        $result=$m->delete($_GET['id']);
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }


}
