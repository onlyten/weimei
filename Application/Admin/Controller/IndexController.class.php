<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
		$this->display();
    }

    public function test(){
		$this->display();
    }

    public function test_view()
    {
    	echo "string";
    }
}