<?php
/**
 * Created by PhpStorm.
 * User: 顾力华
 * Date: 2018/12/28
 * Time: 16:56
 */

namespace app\common\model;


use think\Db;
use think\Model;

class MagorSubject extends  Model
{
    protected $insert = ['time'];

    protected function setTimeAttr()
    {
        return time();
    }
    public  function getSubMagar($id){
        $r=Db::name('magor')->where('subject',$id)->select();
        return $r;


    }




}