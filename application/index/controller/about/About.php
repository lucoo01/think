<?php
namespace app\index\controller\about;

use think\Controller;
use think\Request;
use think\Db;
use think\Debug;

/// 获取GET变量
// Request::instance()->get('id'); // 获取某个get变量
// Request::instance()->get('name'); // 获取get变量
// Request::instance()->get(); // 获取所有的get变量（经过过滤的数组）
// Request::instance()->get(false); // 获取所有的get变量（原始数组）
// 
// input('get.id');
// input('get.name');
// input('get.');
// Request::instance()->server('PHP_SELF'); // 获取某个server变量
// Request::instance()->server(); // 获取全部的server变量
// 
// 
// Request::instance()->session('user_id'); // 获取某个session变量
// Request::instance()->session(); // 获取全部的session变量
// 
// // 更改GET变量
// Request::instance()->get(['id'=>10]);
// 更改POST变量
// Request::instance()->post(['name'=>'thinkphp']);
// 
// 

class About extends Controller
{
    public function index()
    {
        $request = Request::instance();

        /***
        // 获取当前请求的name变量
        Request::instance()->param('name');
        // 获取当前请求的所有变量（经过过滤）
        Request::instance()->param();
        // 获取当前请求的所有变量（原始数据）
        Request::instance()->param(false);
        // 获取当前请求的所有变量（包含上传文件）
        Request::instance()->param(true);
        ***/

        $adminInfo = Db::table('web_member_userinfo')->where('Id',1)->find();

        //$param = $request->param();
        //var_dump($id);
        return "我是 {$adminInfo['nickname']} ,我的邮箱是:{$adminInfo['email']}";
        //return $this->fetch();
    }

    public function dbtest(){


        $result = Db::table('web_member_userinfo')->where('Id',1)->find();

        //$result = '';

        //以二维数据方式返回结果集      
        Debug::dump($result);
        //var_dump($result);

    }
    
    
}