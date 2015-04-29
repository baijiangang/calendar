<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('ddf');
        $c = D('Calendar');
        $res = $c->getData();
        //var_dump($res);exit;
        $this->show($res[0]['title']);
		$this->display();
    }


    public function getData(){
        //$this->show('ddf');
        $this->display();
    }
}