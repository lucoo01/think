<?php
namespace app\index\controller;

use think\Request;

class Error 
{
    public function index(Request $request)
    {
        //根据当前控制器名来判断要执行那个的操作
        $controlName = $request->controller();

        return $this->show404($controlName);
    }
    
    protected function show404($name)
    {
         return "对不起,你访问控制器 {$name} 不存在或者页面不存在";
    }
}