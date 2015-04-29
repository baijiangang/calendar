<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 下午7:56
 */
namespace Home\Model;
use Home\Model\CommonModel;
class CalendarModel extends CommonModel {



    public function getData($con){
        return $this->where('id=1')->select();
    }
}