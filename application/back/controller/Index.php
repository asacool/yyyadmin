<?php
namespace app\back\controller;
use think\Controller;
use think\Session;
use think\Url;
use think\Config;
use think\Page;
use think\Verify;
use think\Image;
use think\Db;
use think\Request;
class Index extends Base {
    public function index(){
        return $this->fetch();
    }
    public function main(){
        return $this->fetch();
    }
}