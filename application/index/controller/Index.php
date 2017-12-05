<?php
namespace app\index\controller;

use think\Controller;

// \Loader::import('QueryList.phpQuery', EXTEND_PATH, '.php');
// \Loader::import('QueryList.QueryList', EXTEND_PATH, '.php');

require("../extend/QueryList/phpQuery.php");
require("../extend/QueryList/QueryList.php");

use QL\QueryList;

class Index extends Controller
{

    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }


    public function hello(){
    	$this->assign(['name'=>'Loen']);

    	return $this->fetch('index');
    }

    public function qlist(){
    	//var_dump();
		$hj = QueryList::Query('http://mobile.csdn.net/',array("url"=>array('.unit h1 a','href')));
		$data = $hj->getData(function($x){
		    return $x['url'];
		});

		print_r($data);
    	//return $data;
    }


    public function news(){


        header('content-type:text/html;charset=utf-8');
        
        $hj = QueryList::Query('http://www.pmtown.com',array(
        												"title"=>array('#list .article > h1','text'),
        												"url"=>array('#list .article > h1 a','href'),
        												"desc"=>array('#list .article > p','text'),
        											));

		$data = $hj->getData(function($x){
		    return $x;
		});

		$this->assign(['data'=> $data]);

        return $this->fetch('news');

    }

}
