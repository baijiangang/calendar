<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('ddf');

        //var_dump($res);exit;
        $this->show($res[0]['title']);
		$this->display();
    }


    public function getData(){
        $c = D('Calendar');
        $res = $c->getData();
        //$this->show('ddf');
        //$this->display();
        echo json_encode($msg);exit;
    }
}