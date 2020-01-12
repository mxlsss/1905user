<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LInkController extends Controller
{
    public function regview(){
        return view('link.reg');
    }
    public function reg()
    {
        $data = request()->except('_token');
        dump($data);
//        $client=new Client;
        $regurl = 'http://1905passport.hcws.vip/login/reg';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $regurl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $json = curl_exec($ch);
        curl_close($ch);
        $arr = json_decode($json, true);
        dd($arr);
        if($arr['errorcode']=='0000'){
            echo '注册成功';
        }else{
            echo '<script>alert("'.$arr['errmsg'].'"); window.history.go(-1);</script>';
        }
    }
    public function loginview(){
        return view('link.login');
    }
    public function login(){
        $data=request()->except('_token');
        $logurl='http://1905sunhao.comcto.com/user/login';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $logurl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $json = curl_exec($ch);
        curl_close($ch);
        echo $json;
    }
    public function indexview(){
        return view('link.index');
    }
    public function index(){
        $data=request()->except('_token');
        $indexurl='http://1905sunhao.comcto.com/user/getuserinfo';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $indexurl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,['account'=>$data['account']]);
        curl_setopt($ch,CURLOPT_HTTPHEADER,[
            'token:'.$data['token']
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $json = curl_exec($ch);
        curl_close($ch);
        $arr=json_decode($json,true);
        echo'用户:'.$arr['name'];echo '<br>';
        echo'年龄:'.$arr['age'];echo '<br>';
        echo'性别:';if($arr['sex']==1){echo '男';}else{echo '女';}echo '<br>';
        echo'电话:'.$arr['mobile'];echo '<br>';
        echo'邮箱:'.$arr['email'];echo '<br>';
        echo'appid:'.$arr['appid'];echo '<br>';


    }
}
