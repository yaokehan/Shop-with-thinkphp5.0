<?php
namespace app\index\controller;
use think\Cache;
use \think\Controller;
class Index      extends Controller
{
    public function index()
    {
        header("Content-type:text/html;charset=utf-8");
        
        $type = $this->types();
        
        $this->assign('type', $type);

//        $this->assign('type',$type);
//        $m=M('goods_type');
//        $type=$m->where("pid=0")->select();//获取一级分类
//        $type2=array();
//        $type3=array();
//        foreach ($type as $key=>$value){
//
//            $type2=$m->where("pid=".$value['id'])->select();//获取二级分类
//            $type[$key]['child']=array(); //二级分类名字
//
//            foreach ($type2 as $k=>$v) {
//
//                array_push($type[$key]['child'], $v);//合并一级二级
//                $type[$key]['child'][$k]['child2'] = array();//三级名字
//
//                $type3 = $m->where('pid=' . $v['id'])->select();//获取3级分类
//                foreach ($type3 as $v2) {
//                    array_push($type[$key]['child'][$k]['child2'],$v2); //拼接三级
//                }
//
//            }
//        }
//        $this->assign('type',$type);
//
//        var_dump($type[0]['child']);
//
//
        
        
        return $this->fetch();
    }
    
    
    public function lists()
    {
        
        $m = M('goods');
        $i = M('goods_files');
//        $data=$m->where("tid=".$_GET['id'].' or tpid='.$_GET['id'])->select();
        $data = $m->where("tid=" . $_GET['id'] . ' or tpid=' . $_GET['id'])->select();
//        var_dump($data);
        $array = array();
        foreach ($data as $k => $v) {
            $v['image'] = array();//图片名字
            $imageId = explode(',', $v['imagepath']);
            
            foreach ($imageId as $vid) {
                $img = $i->field('filepath')->where('id=' . $vid)->find();
                array_push($v['image'], $img);
            }
            array_push($array, $v);
        }
//        var_dump($array[3]['id']);
        $this->assign('data', $array);
//
        return $this->fetch();
    }
    
    public function details()
    {
        $id = $_GET['id'];
        var_dump($id);
        return $this->fetch();
    }
    
    public function types()
    {
        $options = [
            // 缓存类型为File
            'type' => 'Redis',
            // 缓存有效期为永久有效
            'expire' => 3600,
            //缓存前缀
            'prefix' => '',
            // 指定缓存目录
    
        ];
        $redis = Cache::connect($options);
        var_dump($redis);
        if (!$redis->get('types')) {
            $m = M('goods_type');
            $type = $m->where("pid=0")->select();//获取一级分类
            $type2 = array();
            $type3 = array();
        
            foreach ($type as $key => $value) {
            
                $type2 = $m->where("pid=" . $value['id'])->select();//获取二级分类
                $type[$key]['child'] = array(); //二级分类名字
            
                foreach ($type2 as $k => $v) {
                
                    array_push($type[$key]['child'], $v);//合并一级二级
                    $type[$key]['child'][$k]['child2'] = array();//三级名字
                
                    $type3 = $m->where('pid=' . $v['id'])->select();//获取3级分类
                    foreach ($type3 as $v2) {
                        array_push($type[$key]['child'][$k]['child2'], $v2); //拼接三级
                    }
                
                }
            }
            $redis->set('types', $type);
            return $type;
        } else {
            return $redis->get('types');
        }
    }}